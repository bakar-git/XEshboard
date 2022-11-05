<div class="d-flex">
    <style>
        .radioWrapper {
            position: relative;
            width: 20px;
            height: 20px;
            border-radius: 20px;
            background-color: var(--primary);
        }

        .radio {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .radioStyle {
            pointer-events: none;
            display: flex;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .radioStyle circle {
            cx: 50%;
            cy: 50%;
            r: 25%;
            fill: #ffffff00;
            stroke: white;
            stroke-width: 1px;
            stroke-dasharray: 70;
            stroke-dashoffset: 70;
            transition: stroke-dashoffset 0.5s;
        }

        .radio:checked+.radioStyle circle {
            stroke-dashoffset: 0;
        }
    </style>
    <div class="radioWrapper">
        <input class="radio" type="radio" name="radio">
        <svg class="radioStyle">
            <circle></circle>
        </svg>
    </div>
    <div class="ml-2 radioWrapper">
        <input class="radio" type="radio" name="radio">
        <svg class="radioStyle">
            <circle></circle>
        </svg>
    </div>
</div>