<div class="d-flex mx-auto" style="width: 50%;">
    <style>
        .switchWrapper {
            width: 40px;
            height: 20px;
            border-radius: 40px;
            position: relative;
            
        }
        .switch {
            cursor: pointer;
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .switchStyle {
            pointer-events: none;
            border: 3px solid var(--primary-dark);
            border-radius: inherit;
            display: flex;
            width: 100%;
            height: 100%;
            transition: background-color 0.2s;
            background-color: transparent;
        }

        .switchStyle::after {
            transition: transform 0.2s, background-color 0.2s;
            content: "";
            top: 0px;
            left: 0px;
            position: absolute;
            width: 50%;
            z-index: 2;
            height: 100%;
            border-radius: inherit;
            background-color: var(--mute-50);
        }

        .switch:checked+.switchStyle {
            background-color: var(--primary);
        }

        .switch:checked+.switchStyle::after {
            transform: translateX(100%);
            background-color: var(--white);
        }
        .switch:checked~.option1 {
            transition: color 0.2s;
            color: white;
        }
        .option1,.option2{
            pointer-events: none;
            font-size: 7px;
            z-index: 1;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .option1{left: 10%;}
        .option2{right: 10%;}

    </style>
    <div class="switchWrapper">
        <input class="switch" type="checkbox">
        <span class="switchStyle"></span>
        <span class="option1">ON</span>
        <span class="option2">OFF</span>
    </div>
</div>