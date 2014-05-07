function BankAccount( lastname ) {
    this.lastname = lastname;
    this.balance = 1000000;    
}

// write your function here
attackBalance =  function(account) {
   account.balance = 5;
   
};

var jonesBankAccount = new BankAccount ("Jones");

console.log("jonesBankAccount has " + jonesBankAccount.balance + " dollars!");
attackBalance(jonesBankAccount);
console.log("After attack, jonesBankAccount has " + jonesBankAccount.balance + " dollars!");

//more bankaccount fun
function BankAccount( lastname ) {
    this.lastname = lastname;
    var balance = 1000000;
}

attackBalance = function(account) {
    if (account.balance === undefined) {
        console.log("Can't attack");
    }else {
        account.balance = 5;
        //return account.balance;
    }
};

var safeAccount = new BankAccount();

attackBalance(safeAccount);
console.log(attackBalance(safeAccount));

//car fun
function Car( listedPrice ) {
   var price = listedPrice;
   this.speed = 0;
   
   this.getPrice = function() {
       return price;
   };
}

Car.prototype.accelerate = function() {//inheritance
   this.speed += 10;
};

function ElectricCar( listedPrice ) {
   var price = listedPrice;
   this.speed = 0;
   
   this.getPrice = function() {
       return price;
   };
}

ElectricCar.prototype = new Car();


myElectricCar = new ElectricCar(500);

//adding more to car
function Car( listedPrice ) {
   var price = listedPrice;
   this.speed = 0;
   this.numWheels = 4;
   
   this.getPrice = function() {
       return price;
   };
}

Car.prototype.accelerate = function() {
   this.speed += 10;
};

function ElectricCar( listedPrice ) {
   var price = listedPrice;
}
ElectricCar.prototype = new Car();

myElectricCar = new ElectricCar(500);

console.log("myElectricCar has speed " + myElectricCar.speed);

// Print out myElectricCar's number of wheels
console.log("myElectricCar has numWheels " + myElectricCar.numWheels);

console.log(myElectricCar instanceof Car);

//adding more properties to electric car
function ElectricCar( listedPrice ) {
    // add an 'electricity' property to this class
    this.electricity = 100;
    var price = listedPrice;
}

ElectricCar.prototype = new Car();

// Add refuel method here:
ElectricCar.prototype.refuel = function(numHours) {
    this.electricity = electricity + 5;
};

myElectricCar = new ElectricCar(500);

function Car( listedPrice ) {
   var price = listedPrice;
   this.speed = 0;
   this.numWheels = 4;
   
   this.getPrice = function() {
       return price;
   };
}

Car.prototype.accelerate = function() {
   this.speed += 10;
};

function ElectricCar( listedPrice ) {
   var price = listedPrice;
   this.electricity = 100;
}
ElectricCar.prototype = new Car();

// Write the accelerate method for ElectricCar here
ElectricCar.prototype.accelerate = function() {
    this.speed += 20;
};

// Write the decelerate method for ElectricCar here
ElectricCar.prototype.decelerate = function(secondsStepped) {
    this.speed -= secondsStepped * 5;
};

myElectricCar = new ElectricCar(500);

myElectricCar.accelerate();
console.log("myElectricCar has speed " + myElectricCar.speed);
myElectricCar.decelerate(3);
console.log("myElectricCar has speed " + myElectricCar.speed);
