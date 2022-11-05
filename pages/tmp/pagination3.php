<div class="d-flex mx-auto" style="width: 50%;">
    <style>
        .pagination {
            display: flex;
            align-items: stretch;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .pagination a,
        .pagination .fold{
            transform: skewX(-20deg);
            border-left: 1px solid var(--mute);
            text-decoration: none;
            color: var(--mute);
            padding: 15px;
            transition: background-color 0.2s;
            background-color: inherit;
        }
        .pagination a:first-child{
            border: none;
        }
        .pagination .fold{
            font-weight: bold;
        }
        .pagination a:hover,
        .pagination a.active{
            color: white;
            background-color: var(--primary);
        }
    </style>
    <div class="pagination shadow-sm">
        <a href="#"><i class="fas fa-angle-double-left"></i></a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a class="active" href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">7</a>
        <a href="#">8</a>
        <p class="fold">..</p>
        <a href="#"><i class="fas fa-angle-double-right"></i></a>
    </div>
</div>