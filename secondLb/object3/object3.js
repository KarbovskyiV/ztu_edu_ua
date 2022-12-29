function Dogs() {

    this.dogName = 'Dog';
    this.breed = 'simple';
    this.age = 1;

    this.say = function () {
        if (this.age <= 1) {
            alert(`${this.dogName} aged ${this.age} years old of this ${this.breed} says Тяф.`);
        } else if (this.age > 1 && this.age <= 3) {
            alert(`${this.dogName} aged ${this.age} years old of this ${this.breed} says Гав.`);
        } else if (this.age > 3) {
            alert(`${this.dogName} aged ${this.age} years old of this ${this.breed} says Ррр.`);
        }
    }
}

let dogs = new Dogs();
dogs.say();
