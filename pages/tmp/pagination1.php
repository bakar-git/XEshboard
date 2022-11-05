<div class="d-flex mx-auto" style="width: 50%;">
    <style>
        @media (max-width:568px){
            .pagination .text{
                display: none;
            }
        }
        .pagination {
            display: flex;
            align-items: stretch;
            background-color: var(--primary);
        }
        .pagination a,
        .pagination .fold{
            text-decoration: none;
            color: var(--light);
            padding: 15px 17px;
            transition: background-color 0.2s;
            background-color: inherit;
        }
        .pagination .fold{
            font-weight: bold;
        }
        .pagination a:hover,
        .pagination a.active{
            color: white;
            background-color: var(--primary-dark);
        }
        .pagination a:first-child,
        .pagination a:last-child{
            display: flex;
            align-items: center;
            background-color: transparent;
        }
        .pagination a:first-child:hover,
        .pagination a:last-child:hover{
            background-color: transparent;
        }
        .pagination a:first-child > i,
        .pagination a:last-child > i{
            padding: 0px 5px;
        }
    </style>
    <div class="pagination">
        <a href="#"><i class="fas fa-angle-left"></i><p class="text">Prev</p></a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a class="active" href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <p class="fold">.....</p>
        <a href="#"><p class="text">Next</p><i class="fas fa-angle-right"></i></a>
    </div>
</div>