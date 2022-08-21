<!-- following div is necessary for mobile -->
<div class="w-100 h-100 position-fixed"></div>
<div id="left-bar-in" class="d-flex flex-column h-100 position-relative">
    <!-- Branding -->
    <div id="lb-brand" class="py-1 bg-dark-n2 text-center text-white fw-bold m-0"></div>
    <!-- Search Bar -->
    <div id="lb-search-bar" class="d-flex mx-2 my-2 border border-2 rounded-3 border-dark-n2">
        <div class="w-80">
            <input type="text" class="form-control shadow-none bg-dark-n1 border-0 text-white w-100 h-100 rounded-0" placeholder="Search">
        </div>
        <div class="w-20">
            <button class="btn btn-outline-primary w-100 h-100 border-0 rounded-0 rounded-end text-white">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
    <!-- Left Bar Items -->
    <div id="lb-items">
        <!-- Simple Element (active) -->
        <a href="#" class="active btn to-secondary d-flex align-items-center mx-2 px-2 mb-1 text-white lb-item">
            <i class="fas fa-tachometer-alt"></i>
            <span class="name ms-2">Dashboard</span>
        </a>
        <!-- Simple Element -->
        <a href="#" class="btn to-secondary d-flex align-items-center mx-2 p-2 my-1 text-white lb-item">
            <i class="fas fa-user"></i>
            <span class="name ms-2">Users</span>
        </a>
        <!-- Simple Element (with badge) -->
        <a href="#" class="btn to-secondary d-flex align-items-center mx-2 p-2 my-1 text-white lb-item">
            <i class="fas fa-cart-shopping"></i>
            <span class="name ms-2">Product</span>
            <span class="badge bg-danger ms-auto">100</span>
        </a>

    </div>
    <!-- Left Bar bottom panel -->
    <div id="lb-bottom-icons" class="mt-auto border-top border-dark-n2 d-flex flex-column position-relative">
        <button class="btn btn-secondary py-2 text-white mt-auto rounded-0 d-none shadow-none"><i class="fas fa-arrow-right-to-bracket fa-sm"></i></button>
        <div class="bg-dark-n1 d-flex w-100 justify-content-between px-3">
            <button class="btn btn-outline-info px-3 my-1 text-white"><i class="fas fa-gear fa-sm"></i></button>
            <button class="btn btn-outline-success px-3 my-1 text-white"><i class="fas fa-expand fa-sm"></i></button>
            <button class="btn btn-outline-warning px-3 my-1 text-white"><i class="fas fa-lock fa-sm"></i></button>
            <button class="btn btn-outline-danger px-3 my-1 text-white"><i class="fas fa-sign-out fa-sm"></i></button>
        </div>
    </div>
    <!-- Left bar setting panel (small panel) -->
    <div id="lb-config-panel" class="position-absolute top-50 translate-middle-y">
        <div id="toggle-lb-overlay" class="px-1 bg-dark-n2 cursor-pointer to-secondary text-white position-relative">
            <i class="fas fa-thumb-tack fa-2xs"></i>
            <i class="fas fa-slash fa-sm position-absolute top-50 start-50 translate-middle text-light"></i>
        </div>
        <div id="toggle-lb-display-compact" class="px-1 bg-dark-n2 cursor-pointer to-secondary text-white position-relative">
            <i class="fas fa-arrow-alt-circle-left fa-2xs"></i>
            <i class="fas fa-slash fa-sm position-absolute top-50 start-50 translate-middle text-light"></i>
        </div>
        <div id="toggle-lb-interaction-mouse" class="px-1 bg-dark-n2 cursor-pointer to-secondary text-white position-relative">
            <i class="fas fa-mouse fa-2xs"></i>
            <i class="fas fa-slash fa-sm position-absolute top-50 start-50 translate-middle text-light"></i>
        </div>
    </div>
</div>