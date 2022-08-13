<!-- Header -->
<div class="d-flex px-2 align-items-stretch shadow-sm bg-light">
    <div class="py-1">
        <span class="h2 mb-0 text-black-50">Products</span>
    </div>
    <button id="toggle-content-display-expand" class="ms-auto me-2 rounded-0 btn btn-outline-secondary border-0 px-3">
        <i class="fas fa-expand"></i>
    </button>
    <button class="rounded-0 btn btn-outline-secondary border-0 px-3">
        <i class="fas fa-gear"></i>
    </button>
</div>
<!-- Body -->
<div class="p-4 overflow-auto h-100" id="content-in">
    <style>
        /* ====================== */
        /* Absolute style of table*/
        /* ====================== */

        /* table row */
        .c-table>.tr {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
        }

        /* table data*/
        .c-table>.tr>.td {
            display: flex;
            align-items: center;
            flex: 1;
        }

        /* table data (inside) */
        .c-table>.tr>.td>.td-in,
        .c-table>.tr>.td::before {
            padding: 0.25rem;
            word-break: break-all;
        }

        .c-table>.tr>.td>.td-in {
            flex: 2;
        }

        .c-table>.tr>.td::before {
            content: attr(data-col);
            display: none;
            flex: 1;
        }

        /* Interactions */
        .c-table>.tr>.td.expand {
            flex-basis: 100%!important;
            display: none;
        }

        .c-table>.tr.show>.td {
            display: flex!important;
        }

        .c-table>.tr.show> .td:first-child i {
            transform: rotateZ(90deg);
        }

        /* DropDown */
        .c-table>.tr>.td:first-child {
            justify-content: center;
            width: 1.5rem;
            flex: 0 1 auto;
        }

        /* ====================== */
        /* Theme style of table*/
        /* ====================== */

        .c-table>.tr>.td{
            border: 1px solid rgba(207, 201, 201, 0.3);
        }
        .c-table > .tr:first-child{
            background-color: var(--bs-info);
            color: white;
        }
        .c-table>.tr>.td::before {
           background-color: var(--bs-info);
           color: white;
        }
        .c-table .tr:nth-child(even){
            background-color: #a3eaf8;
        }

    </style>
    <div class="p-2 shadow border-5 border-top border-white rounded-3 text-black-50" id="table-here">

        <div class="c-table">
            <!-- header -->
            <div class="tr">
                <div class="td">
                    <span>X</span>
                </div>
                <div class="td">
                    <div class="td-in">
                        <span>ID</span>
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
        <script type="module">
            import bst_table from './asset/js/table.js';
            // id, first_name, dob, cnic, sex, email
            let header_columns = [
                {
                    name: 'ID',
                    size: 1,
                    break_at: '0px'
                },
                {
                    name: 'Name',
                    size: 1,
                    break_at: '500px'
                },
                {
                    name: 'Date Of Birth',
                    size: 1,
                    break_at: '1000px'
                },
                {
                    name: 'CNIC',
                    size: 1,
                    break_at: '1400px'
                },
                {
                    name: 'Gender',
                    size: 1,
                    break_at: '800px'
                },
                {
                    name: 'Email',
                    size: 2,
                    break_at: '600px'
                },
            ];
            document.getElementById("table-here").innerHTML = "";
            let myTable = new bst_table("#table-here", header_columns);
            document.addEventListener("DOMContentLoaded", ()=>{
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
                            element.email
                        ]);
                    });
                });
            })
        </script>
    </div>
</div>