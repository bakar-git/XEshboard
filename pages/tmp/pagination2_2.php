<div class="d-flex mx-auto justify-content-center">
    <style>
        .pagination {
            display: flex;
            align-items: stretch;
            padding: 5px;
        }
        .pagination a,
        .pagination .fold{
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            transition: background-color 0.2s;
            background-color: var(--primary);
            border-radius: 5px;
            margin: 0px 5px;
        }
        .pagination .fold{
            font-weight: bold;
            padding: 10px;
        }
        .pagination a:hover,
        .pagination a.active{
            color: white;
            background-color: var(--primary-dark);
        }
    </style>
    <div class="pagination shadow">
    <a href="#"><i class="fas fa-angle-double-left"></i></a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a class="active" href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <p class="fold">.....</p>
        <a href="#"><i class="fas fa-angle-double-right"></i></a>
    </div>
</div>