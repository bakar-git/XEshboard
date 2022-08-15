<div class="d-flex px-4 align-items-stretch shadow-sm bg-light position-relative">
    <div class="py-2">
        <span class="h2 mb-0 text-black-50 ">Dashboard</span>
    </div>
    <!-- Search Bar -->
    <div id="content-in-search" class="ms-auto d-flex align-items-stretch">
        <button class="btn btn-outline-secondary border-0 px-3 my-2">
            <i class="fas fa-search"></i>
        </button>
        <div class="position-absolute w-100 start-0 top-0 h-100 px-5 py-2 bg-info">
            <div class="w-90">
                <input type="text" class="form-control shadow-none w-100 h-100 rounded-0 rounded-start" placeholder="Search">
            </div>
            <div class="w-10">
                <button class="btn btn-secondary px-1 py-0 w-100 h-100 rounded-0 rounded-end">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <button id="toggle-content-display-expand" class="btn btn-outline-secondary border-0 px-3 my-2">
        <i class="fas fa-expand"></i>
    </button>
    <!-- Right Bar Close Toggle -->
    <button id="toggle-rb-display-close" class="btn btn-outline-secondary border-0 px-3 my-2">
        <i class="fas fa-gear"></i>
    </button>
</div>
<!-- Create -->
<button class="position-absolute bottom-0 end-0 translate-middle shadow btn btn-primary p-2" style="z-index: 10;">
    <i class="fas fa-plus-square me-1"></i>
    <span class="d-none d-md-inline">Create New</span>
</button>