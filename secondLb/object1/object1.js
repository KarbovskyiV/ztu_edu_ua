let object = {
    className: 'open menu'
}

function addClass(obj, cls) {

    let check = false;
    let oldClass = obj.className ? obj.className.split(' ') : [];

    // debug, don't understand
    for (let i = 0; i < oldClass.length; i++) {
        if (cls == oldClass[i]) {
            check = true;
        }
    }

    if (!check) {
        oldClass.push(cls);
    }

    obj.className = oldClass.join(' ');
}

addClass(object, 'new');   // obj.className='open menu new'
addClass(object, 'open');  // без змін (клас вже існує)
addClass(object, 'me');    // obj.className='open menu new me'

alert(object.className); // "open menu new me"
