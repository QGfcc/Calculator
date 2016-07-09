/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function state() {
  var lastVal = undefined;
  var curVal = undefined;
  var input = "";
  var curOp = "";
  var nextOp = "";
//  this.value2 = "test this.value";
  this.addOperator = function (operator) {
    curOp = nextOp;
    nextOp = operator;
    if (input !== "") {
      this.updateCurVal();
      input = "";
      if (lastVal !== undefined) {
        this.compute()
      }

    }
  };
  this.updateInput = function (lastChar) {
    if (lastChar !== "." || !(input.indexOf(".") > -1)) {
      input += lastChar;
      this.displayInput();
    }
  };
  this.updateCurVal = function () {
    lastVal = curVal;
    curVal = parseFloat(input);
  };
  this.compute = function () {
    switch (curOp) {
      case "+":
        curVal = lastVal + curVal;
        this.displayAnswer();
        break;
      case "-":
        curVal = lastVal - curVal;
        this.displayAnswer();
        break;
      case "*":
        curVal = lastVal * curVal;
        this.displayAnswer();
        break;
      case "/":
        curVal = lastVal / curVal;
        this.displayAnswer();
        break;
      case "=":
        break;
      default :
        this.displayErr();
    }
  }
  this.clearInput = function () {
    input = "";
    this.displayInput();
  }
  this.clearAll = function () {
    lastVal = undefined;
    curVal = undefined;
    input = "";
    curOp = "";
    nextOp = "";
    this.displayInput();
  }
  this.display = function (str) {
//    document.getElementById("calScreen").innerHTML = str;
    $("#calScreen").text(str);
  };
  this.displayInput = function () {
    this.display(input);
  };
  this.displayAnswer = function () {
    this.display(curVal);
  };
  this.displayErr = function () {
    this.display("ERROR");
  };
}

$(document).ready(function () {
  var calculator = new state();
//  $(".inputs div div button").addClass("digit");
//  $(".inputs .row div").addClass("col-xs-3 col-sm-2 col-sm-offset-4");
//  $(".inputs .row div").addClass("col-xs-3 col-sm-2 col-sm-offset-4");
//  $(".buttons").addClass("col-xs-3 col-sm-2");
//  $(".buttons:first-child").addClass("col-sm-offset-4");
//  $(".buttons").addClass("col-xs-3 text-center");
  $(".buttons").addClass("text-center");
//  $(".inputs div div:last-child button").removeClass("digit");
//  $(".inputs div div:last-child button").addClass("operator");
//  $(".inputs div button:nth-child(4)").removeClass("digit");
//  $(".inputs div button:nth-child(4)").addClass("digit");
//  $(".digit").click(calculator.updateInput.bind(calculator, this.value2));
//  $(".digit").click(function () {
//    calculator.updateInput.call(calculator, this.value);
//  });
//  $(".equal").removeClass("digit");
//  $(".equal").addClass("operator");
//  $(".CE").removeClass("digit");
  $(".digit").click(function () {
    calculator.updateInput.call(calculator, this.value);
  });
  $(".operator").click(function () {
    calculator.addOperator.call(calculator, this.value);
  });
//  $(".equal").click(function () {
////    calculator.compute.bind(calculator)();
//    calculator.addOperator.bind(calculator, this.value)();
//  });
  $("#CE").click(function () {
//    calculator.compute.bind(calculator)();
    calculator.clearInput.call(calculator);
//    alert("dqs");
  });
  $("#CA").click(function () {
    calculator.clearAll.call(calculator);
  });
});
