// static cache
const static_cache = 'cache-v1';
const static_assets = [
    '/asset/css/style.css',
    '/asset/css/table.css',
    '/asset/js/main.js',
    '/asset/js/table.js',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css'
];

// install service worker
self.addEventListener('install', (event) => {
    // console.log('service worker installed');
    self.skipWaiting()
    // Precache assets on install
    event.waitUntil(caches.open(static_cache).then((cache) => {
        return cache.addAll(static_assets);
    }));
});

// activate service worker
self.addEventListener('activate', (event) => {
    // console.log('service worker activated');
    event.waitUntil(
        caches.keys().then((keys) => {
            return Promise.all(
                keys.filter(key => key !== static_cache)
                    .map(key => caches.delete(key))
            )
        })
    )
});

// Intercepting fetch requests
self.addEventListener('fetch', (event) => {
    event.respondWith(caches.open(static_cache).then((cache) => {
        // Go to the cache first
        return cache.match(event.request.url).then((cachedResponse) => {
            // Return a cached response if we have one
            if (cachedResponse) {
                return cachedResponse;
            }

            // Otherwise, hit the network
            return fetch(event.request).then((fetchedResponse) => {
                // Add the network response to the cache for later visits
                cache.put(event.request, fetchedResponse.clone());
                // Return the network response
                return fetchedResponse;
            });
        });
    }));
});