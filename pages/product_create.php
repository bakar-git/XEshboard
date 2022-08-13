<!-- Header -->
<div class="d-flex px-2 align-items-stretch shadow-sm bg-light">
    <div class="py-1">
        <span class="h2 mb-0 text-black-50">Create Product</span>
    </div>
    <button id="toggle-content-display-expand"
        class="ms-auto me-2 rounded-0 btn btn-outline-secondary border-0 px-3">
        <i class="fas fa-expand"></i>
    </button>
    <button class="rounded-0 btn btn-outline-secondary border-0 px-3">
        <i class="fas fa-gear"></i>
    </button>
</div>
<!-- Body -->
<div class="p-4 overflow-auto h-100" id="content-in">
    <div class="p-2 shadow border-5 border-top border-white rounded-3 text-black-50">
        <!-- Tabs -->
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="#tab-product-basic-info" class="nav-link active rounded-0" data-bs-toggle="tab">Basic Info
                    & Pricing</a>
            </li>
            <li class="nav-item">
                <a href="#tab-product-image" class="nav-link rounded-0" data-bs-toggle="tab">Product Image</a>
            </li>
            <li class="nav-item">
                <a href="#tab-product-description" class="nav-link rounded-0" data-bs-toggle="tab">Product
                    Pricing</a>
            </li>
            <button class="btn btn-primary ms-auto">
                <i class="fas fa-folder"></i>
                <span>Draft</span>
            </button>
            <button class="btn btn-primary ms-2">
                <i class="fas fa-share"></i>
                <span>Publish</span>
            </button>
        </ul>
        <!-- Tabs Content -->
        <div class="tab-content border-primary border p-2">
            <div class="tab-pane fade show active" id="tab-product-basic-info">
                <div class="col-12" style="min-height: 16rem;">
                    <div class="text-black-50">
                        <div class="d-flex align-items-center">
                            <span class="h4 m-0">Basic Info & Guaranty</span>
                            <input class="ms-auto form-check-input" type="checkbox" id="product_recommended">
                            <label class="form-check-label ms-1 fs-7" for="product_recommended">Recommended</label>
                        </div>
                        <hr class="mx-3 my-2">
                        <!-- product title -->
                        <span class="d-block fw-bold fs-7">Product Title</span>
                        <div class="input-group">
                            <span class="input-group-text text-info"><i class="fas fa-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Product Title">
                        </div>
                        <div class="row my-2">
                            <!-- size -->
                            <div class="col-lg-6 col-12">
                                <span class="d-block fw-bold fs-7">Package Size</span>
                                <div class="input-group">
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
                                <div class="input-group">
                                    <span class="input-group-text text-info"><i
                                            class="fas fa-weight-hanging"></i></span>
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
                                <div class="input-group">
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
            </div>
            <div class="tab-pane fade" id="tab-product-image">
                <div class="text-black-50" style="min-height: 16rem;">
                    <div class="d-flex align-items-center">
                        <span class="h4 m-0">Product Gallery</span>
                        <button onclick="document.getElementById('product-gallery').dropzone.removeAllFiles()"
                            class="ms-auto btn btn-info text-white p-1 py-0">
                            <i class="fas fa-trash fa-sm"></i>
                        </button>
                    </div>
                    <hr class="mx-3 my-2">
                    <div class="h-100">
                        <form action="/file-upload" class="dropzone dz-clickable bg-inherit border-0"
                            id="product-gallery-area" style="overflow: auto;max-height: 20rem;">
                            <div class="dz-message text-center">
                                <button class="dz-button" type="button">
                                    <i class="fas fa-file-upload fa-3x d-block mb-2"></i>
                                    <span class="h5">Drop files here to upload or click to upload</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- DROPZONE JS -->
                <!-- cdn -->
                <!-- <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script> -->
                <!-- local -->
                <script src="./asset/lib/dropzone/dropzone-min.js"></script>
                <script>
                    Dropzone.discover();
                </script>
                <!-- DROPZONE CSS -->
                <!-- cdn -->
                <!-- <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" /> -->
                <!-- local -->
                <link rel="stylesheet" href="./asset/lib/dropzone/dropzone.css">
                <!-- <link rel="stylesheet" href="./asset/lib/dropzone/basic.css"> -->
            </div>
            <div class="tab-pane fade" id="tab-product-description">
                <div class="col-12">
                    <div class="text-black-50">
                        <span class="h4 m-0">Product Details</span>
                        <hr class="mx-3 my-2">
                        <textarea id="product-details"></textarea>
                    </div>
                </div>
                <!-- TINYMCE JS -->
                <!-- cdn -->
                <!-- You have to make your own CDN and allow your domain to cdn in there dashboard -->
                <script
                    src="https://cdn.tiny.cloud/1/n21j8x7iwpn5q7ps6tju4ojlc97a7gb4xjy84yk6ioe0qpeq/tinymce/6/tinymce.min.js"
                    referrerpolicy="origin"></script>
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
            </div>
        </div>
    </div>
</div>