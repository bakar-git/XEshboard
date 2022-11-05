<div class="d-flex">
    <style>
        .radioWrapper {
            border-radius: 20px;
            position: relative;
            width: 20px;
            height: 20px;
        }

        .radio {
            position: absolute;
            opacity: 0;
        }
        .radio,
        .radioStyle{
            width: 100%;
            height: 100%;
        }

        .radioStyle {
            pointer-events: none;
            background-color: var(--info);
            border-radius: inherit;
            position: relative;
            display: flex;
        }

        .radioStyle::after {
            visibility: hidden;
            content: "";
            position: absolute;
            width: 50%;
            height: 50%;
            border-radius: inherit;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            box-shadow: 0px 2px 5px 0px black;
        }

        .radio:checked+.radioStyle::after {
            visibility: visible;
        }
    </style>
    <div class="radioWrapper">
        <input class="radio" type="radio" name="radio">
        <span class="radioStyle"></span>
    </div>
    <div class="ml-2 radioWrapper">
        <input class="radio" type="radio" name="radio">
        <span class="radioStyle"></span>
    </div>
</div>