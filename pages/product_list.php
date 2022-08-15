<!-- Header -->
<?php include "./common/page_header.php" ?>
<!-- Body -->
<div class="p-4 overflow-auto h-100" id="content-in">
    <link rel="stylesheet" href="./asset/css/table.css">
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="p-3 text-white my-2 l-bg-info rounded-3 shadow position-relative">
                <i class="fas fa-info-circle fa-7x ms-auto text-light-transparent position-absolute end-0"></i>
                <span class="d-block h5 mb-4">New Orders</span>
                <div class="d-flex align-items-end mb-2">
                    <span class="h2 fw-bold">3,2423</span>
                    <span class="ms-auto h5">+50%</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="p-3 text-white my-2 l-bg-warning rounded-3 shadow position-relative">
                <i class="fas fa-warning fa-7x ms-auto text-light-transparent position-absolute end-0"></i>
                <span class="d-block h5 mb-4">New Orders</span>
                <div class="d-flex align-items-end mb-2">
                    <span class="h2 fw-bold">3,2423</span>
                    <span class="ms-auto h5">+50%</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="p-3 text-white my-2 l-bg-success rounded-3 shadow position-relative">
                <i class="fas fa-thumbs-up fa-7x ms-auto text-light-transparent position-absolute end-0"></i>
                <span class="d-block h5 mb-4">New Orders</span>
                <div class="d-flex align-items-end mb-2">
                    <span class="h2 fw-bold">3,2423</span>
                    <span class="ms-auto h5">+50%</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="p-3 text-white my-2 l-bg-danger rounded-3 shadow position-relative">
                <i class="fas fa-skull-crossbones fa-7x ms-auto text-light-transparent position-absolute end-0"></i>
                <span class="d-block h5 mb-4">New Orders</span>
                <div class="d-flex align-items-end mb-2">
                    <span class="h2 fw-bold">3,2423</span>
                    <span class="ms-auto h5">+50%</span>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-2 shadow border-5 border-top border-white rounded-3 text-black-50 mt-3" id="table-here">
        <div class="c-table">
            <!-- header -->
            <div class="tr">
                <div class="td">
                    <span>X</span>
                </div>
                <div class="td">
                    <div class="td-in">
                        <button class="btn btn-info rounded-0 text-white w-100 text-start">
                            <span>ID</span>
                            <i class="fas fa-sort ms-2"></i>
                        </button>
                    </div>
                </div>
                <div class="td">
                    <div class="td-in">
                        <span>Status</span>
                    </div>
                </div>
                <div class="td">
                    <div class="td-in">
                        <span>Access</span>
                    </div>
                </div>
                <div class="td">
                    <div class="td-in">
                        <span>User Name</span>
                    </div>
                </div>
                <div class="td">
                    <div class="td-in">
                        <span>IP Address</span>
                    </div>
                </div>
            </div>
            <!-- row 1 -->
            <div class="tr">
                <div class="td">
                    <i class="fas fa-angle-right"></i>
                </div>
                <div data-col="Id" class="td">
                    <div class="td-in">
                        <span>0000001</span>
                    </div>
                </div>
                <div data-col="Status" class="td">
                    <div class="td-in">
                        <span class="badge bg-success p-2">Active</span>
                    </div>
                </div>
                <div data-col="Access" class="td">
                    <div class="td-in">
                        <span class="badge bg-info p-2">Agent</span>
                    </div>
                </div>
                <div data-col="User Name" class="td">
                    <div class="td-in">
                        <span>Muhammad Abu Bakar</span>
                    </div>
                </div>
                <div data-col="IP Address" class="td">
                    <div class="td-in">
                        <span>1234:1234:1234:1234:1234:1234:1234:1234</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module">
        import {Table} from './asset/js/table.js';
        // id, first_name, dob, cnic, gender, email
        let header_columns = [
            {
                name: 'ID',
                // data:
                //     `<button class="btn btn-info rounded-0 text-white w-100 text-start">` +
                //     `        <span>ID</span>` +
                //     `        <i class="fas fa-sort ms-2"></i>` +
                //     `</button>`
            },
            {
                name: 'Name',
                break_at: '500px',
                editable : true,
                func : (col)=>{
                    col.addEventListener(Table.col_change_event_name, (evt)=>{
                        console.log(evt.detail.previous_value);
                        console.log(evt.detail.new_value);
                    })
                }
            },
            {
                name: 'Date Of Birth',
                break_at: '1000px',
                editable : true,
            },
            {
                name: 'CNIC',
                break_at: '1400px',
                editable : true,
            },
            {
                name: 'Gender',
                break_at: '800px',
                editable : true,
            },
            {
                name: 'Email',
                size: 3,
                break_at: '600px',
                editable : true,
            },
            {
                name: ' ',
                size: 0.28,
            },
            {
                name: ' ',
                size: 0.28,
            },
        ];
        document.getElementById("table-here").innerHTML = "";
        let myTable = new Table("#table-here", header_columns);
        window.tbl = myTable;
        document.addEventListener("DOMContentLoaded", () => {
            fetch('dataLoader.php')
                .then((response) => response.json())
                .then((data) => {
                    data.forEach(element => {
                        myTable.add_row([
                            element.id,
                            element.first_name,
                            element.dob,
                            element.cnic,
                            element.sex,
                            element.email,
                            '<button class="btn btn-success px-2 py-1" title="edit"><i class="fas fa-edit fa-xs"></i></button>',
                            '<button class="btn btn-danger px-2 py-1" title="remove"><i class="fas fa-trash fa-xs"></i></button>',
                        ]);
                    });
                });
        })
    </script>
</div>