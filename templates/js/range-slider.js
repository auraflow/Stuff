const rangeSlider = document.getElementById('range-block');

if (rangeSlider) {
    noUiSlider.create(rangeSlider, {
        start: [1, 20000],
        connect: true,
        step: 1,
        range: {
            'min': [1],
            'max': [20000]
        }
    });

    const input_mincost = document.getElementById('mincost-input');
    const input_maxcost = document.getElementById('maxcost-input');
    const inputs = [input_mincost, input_maxcost];

    rangeSlider.noUiSlider.on('update', function(values, handle){
        inputs[handle].value = Math.round(values[handle]);
    });

    const setRangeSlider = (i, value) => {
        let arr = [null, null];
        arr[i] = value;

        // console.log(arr);
        rangeSlider.noUiSlider.set(arr);
    };

    inputs.forEach((el, index) => {
        el.addEventListener('change', (e) => {
            // console.log(index);
            setRangeSlider(index, e.currentTarget.value);
        });
    });
}