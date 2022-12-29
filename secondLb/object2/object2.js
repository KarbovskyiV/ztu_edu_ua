let obj = {
    className: 'open menu'
};

function removeClass(obj, cls) {
    let classes = obj.className ? obj.className.split(' ') : [];

    // debug, don't understand
    while (classes.indexOf(cls) !== -1) {
        for (let i = 0; i < classes.length; i++) {
            if (classes[i] === cls) {
                classes.splice(i, 1);
            }
        }

        obj.className = classes.join(' ');
    }
}

removeClass(obj, 'open');   // obj.className='menu'
removeClass(obj, 'blabla'); // без змін (такого класу немає)
alert(obj.className);

obj = {
    className: 'my menu menu'
};
removeClass(obj, 'menu');
alert(obj.className); // 'my'
