<!-- Scroll Spy -->
<nav id="product-page-scrollSpy" class="navbar navbar-light bg-light shadow w-100 px-2 position-absolute top-0" style="z-index: 5;">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="#product-basicInfo">Basic Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#product-gallery">Gallery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#product-details">Details</a>
        </li>
    </ul>
</nav>
<div id="content-in" class="p-4" data-bs-spy="scroll" data-bs-target="#product-page-scrollSpy" data-bs-offset="0" tabindex="0">
    <div class="row g-3 mt-4">
        <!-- Basic Info & Gurantay -->
        <div class="col-lg-6 col-12" id="product-basicInfo">
            <div class="p-2 shadow border-5 border-top border-info rounded-3 text-black-50 h-100">
                <div class="d-flex align-items-center">
                    <span class="h4 m-0">Basic Info & Guaranty</span>
                    <input class="ms-auto form-check-input" type="checkbox" id="product_recommended">
                    <label class="form-check-label ms-1 fs-7" for="product_recommended">Recommended</label>
                </div>
                <hr class="mx-3 my-2">
                <!-- product title -->
                <span class="d-block fw-bold fs-7">Product Title</span>
                <div class="input-group-sm input-group">
                    <span class="input-group-text text-info"><i class="fas fa-pencil"></i></span>
                    <input type="text" class="form-control" placeholder="Product Title">
                </div>
                <div class="row my-2">
                    <!-- size -->
                    <div class="col-lg-6 col-12">
                        <span class="d-block fw-bold fs-7">Package Size</span>
                        <div class="input-group-sm input-group">
                            <span class="input-group-text text-info"><i class="fas fa-box"></i></span>
                            <input type="text" class="form-control" placeholder="Package Size">
                            <select class="form-select c-form-select">
                                <option value="in">inches</option>
                                <option value="cm" selected>centimeter</option>
                                <option value="m">meter</option>
                                <option value="mm">milimeter</option>
                            </select>
                        </div>
                    </div>
                    <!-- weight -->
                    <div class="col-lg-6 col-12">
                        <span class="d-block fw-bold fs-7">Weight</span>
                        <div class="input-group-sm input-group">
                            <span class="input-group-text text-info"><i class="fas fa-weight-hanging"></i></span>
                            <input type="text" class="form-control" placeholder="Weight">
                            <select class="form-select c-form-select">
                                <option value="g" selected>gram</option>
                                <option value="mg">miligram</option>
                                <option value="kg">kilogram</option>
                            </select>
                        </div>
                    </div>
                    <!-- Location -->
                    <div class="col-lg-6 col-12">
                        <span class="d-block fw-bold fs-7">Store Location</span>
                        <div class="input-group-sm input-group">
                            <span class="input-group-text text-info"><i class="fas fa-location"></i></span>
                            <input type="text" class="form-control" placeholder="Store Location">
                        </div>
                    </div>
                    <!-- Guranaty -->
                    <div class="col-lg-6 col-12">
                        <span class="d-block fw-bold fs-7">Guaranty</span>
                        <input type="range" class="form-range" min="0" max="365">
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing -->
        <div class="col-lg-3 col-12">
            <div class="p-2 shadow border-5 border-top border-info rounded-3 text-black-50 h-100">
                <div class="d-flex align-items-center">
                    <span class="h4 m-0">Pricing</span>
                    <select class="form-select form-select-sm ms-auto c-form-select" style="max-width: 75px;">
                        <option value="pkr" selected>PKR</option>
                        <option value="usd">USD</option>
                        <option value="euro">EURO</option>
                        <option value="yen">YEN</option>
                    </select>
                </div>
                <hr class="mx-3 my-2">
                <!-- purchase price and stock -->
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <span class="d-block fw-bold fs-7">Purchase Price</span>
                        <div class="input-group-sm input-group mb-2">
                            <input type="text" class="form-control" placeholder="Purchase Price">
                            <span class="input-group-text text-info"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="d-block fw-bold fs-7">Stock Available</span>
                        <div class="input-group-sm input-group">
                            <span class="input-group-text text-info"><i class="fas fa-boxes-packing"></i></span>
                            <input type="text" class="form-control" placeholder="Stock Available">
                        </div>
                    </div>
                </div>
                <!-- Minimum Cost and pieces per lot -->
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <span class="d-block fw-bold fs-7">Minimum Cost</span>
                        <div class="input-group-sm input-group mb-2">
                            <input type="text" class="form-control" placeholder="Minimum Cost">
                            <span class="input-group-text text-info"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="d-block fw-bold fs-7">Pieces Per Lot</span>
                        <div class="input-group-sm input-group">
                            <input type="text" class="form-control" placeholder="Pieces Per Lot" value="1">
                            <span class="input-group-text text-info">/lot</span>
                        </div>
                    </div>
                </div>
                <!-- Sell Price and Wholesale Price -->
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <span class="d-block fw-bold fs-7">Sell Price</span>
                        <div class="input-group-sm input-group mb-2">
                            <input type="text" class="form-control" placeholder="Sell Price">
                            <span class="input-group-text text-info"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <span class="d-block fw-bold fs-7">Wholesale Price</span>
                        <div class="input-group-sm input-group">
                            <input type="text" class="form-control" placeholder="Wholesale Price">
                            <span class="input-group-text text-info"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand, screen location and properties -->
        <div class="col-lg-3 col-12">
            <div class="p-2 shadow border-5 border-top border-info rounded-3 text-black-50 h-100" id="product-brand">
                <span class="h4 d-block text-overflow-ellipsis overflow-hidden w-100 text-nowrap m-0">Brand
                    & Screen Location</span>
                <hr class="mx-3 my-2">

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#tab-product-brand" class="nav-link active" data-bs-toggle="tab">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab-product-properties" class="nav-link" data-bs-toggle="tab">Profile</a>
                    </li>
                </ul>
                <div class="tab-content bg-light border-0 p-2">
                    <div class="tab-pane fade show active" id="tab-product-brand">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-info"><i class="fas fa-tags"></i></span>
                                    <input type="text" class="form-control" placeholder="Brand">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-info"><i class="fas fa-m"></i></span>
                                    <input type="text" class="form-control" placeholder="Model">
                                </div>
                            </div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected>Home screen location</option>
                                    <option value="option-1">option-1</option>
                                    <option value="option-2">option-2</option>
                                    <option value="option-3">option-3</option>
                                    <option value="option-4">option-4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-product-properties">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-2">
                                    <span class="input-group-text text-info"><i class="fas fa-pallet"></i></span>
                                    <input type="text" class="form-control" placeholder="Color">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text text-info"><i class="fas fa-smile"></i></span>
                                    <input type="text" class="form-control" placeholder="Look">
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="fs-6 fw-bold my-2">Ratings</span>
                                <div class="rating_star">
                                    <input name="prod_rating" data-rate="5" type="radio">
                                    <input name="prod_rating" data-rate="4" type="radio">
                                    <input name="prod_rating" data-rate="3" type="radio">
                                    <input name="prod_rating" data-rate="2" type="radio">
                                    <input name="prod_rating" data-rate="1" type="radio">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Gallery -->
        <div class="col-lg-9 col-12" id="product-gallery">
            <div class="d-flex flex-column p-2 shadow border-5 border-top border-info rounded-3 text-black-50 h-100" style="min-height: 16rem;">
                <div class="d-flex align-items-center">
                    <span class="h4 m-0">Product Gallery</span>
                    <button onclick="document.getElementById('product-gallery').dropzone.removeAllFiles()" class="ms-auto btn btn-info text-white p-1 py-0">
                        <i class="fas fa-trash fa-sm"></i>
                    </button>
                </div>
                <hr class="mx-3 my-2">
                <div class="h-100">
                    <form action="/file-upload" class="dropzone dz-clickable bg-inherit border-0" id="product-gallery-area" style="overflow: auto;max-height: 20rem;">
                        <div class="dz-message text-center">
                            <button class="dz-button" type="button">
                                <i class="fas fa-file-upload fa-3x d-block mb-2"></i>
                                <span class="h5">Drop files here to upload or click to upload</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Categories & Tags -->
        <div class="col-lg-3 col-12">
            <div class="p-2 shadow border-5 border-top border-info rounded-3 text-black-50 h-100">
                <span class="h4 m-0">Categories & Tags</span>
                <hr class="mx-3 my-2">
            </div>
        </div>
        <!-- Product Detailes -->
        <div class="col-lg-9 col-12" id="product-details">
            <div class="p-2 shadow border-5 border-top border-info rounded-3 text-black-50 h-100">
                <span class="h4 m-0">Product Details</span>
                <hr class="mx-3 my-2">
                <textarea id="product-details"></textarea>
            </div>
        </div>
        <!-- Publishing -->
        <div class="col-lg-3 col-12">
            <div class="p-2 shadow border-5 border-top border-info rounded-3 text-black-50 h-100">
                <span class="h4 m-0">Product Details</span>
                <hr class="mx-3 my-2">
                <div class="row gx-1 gy-2">
                    <div class="col-6">
                        <button class="w-100 btn btn-primary" type="button">
                            <i class="fas fa-folder fa-2x d-block"></i>
                            <span class="text-nowrap text-overflow-ellipsis overflow-hidden">Save to
                                draft</span>
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="w-100 btn btn-primary" type="button">
                            <i class="fas fa-share fa-2x d-block"></i>
                            <span class="text-nowrap">Publish to site</span>
                        </button>
                    </div>
                    <div class="col-12">
                        <button class="w-100 btn btn-primary" type="button">
                            <i class="fas fa-share-alt fa-2x d-block"></i>
                            <span>Publish Everywhere</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TINYMCE JS -->
<!-- cdn -->
<!-- You have to make your own CDN and allow your domain to cdn in there dashboard -->
<script src="https://cdn.tiny.cloud/1/n21j8x7iwpn5q7ps6tju4ojlc97a7gb4xjy84yk6ioe0qpeq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<!-- local -->
<!-- <script src="./asset/lib/tinymce6/tinymce.min.js"></script> -->

<script>
    tinymce.init({
        selector: 'textarea#product-details',
        plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });
</script>


<!-- DROPZONE CSS -->
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css">
<!-- DROPZONE JS -->
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>