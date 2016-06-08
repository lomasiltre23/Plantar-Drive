var app = angular.module('APP',['ngRoute']);

app.config(["$routeProvider","$locationProvider", function (rP, lP) {
    rP
        .when("/", {templateUrl: url+"/templates/inicioAdmin.html", controller: "inicioAdmin"})
        .when("/clientes/:nombre", {templateUrl: url+"/templates/odts.html", controller: "ODTs"})
        .when("/crearODT/:nombre", {templateUrl: url+"/templates/crearODT.html", controller: "crearODT"})
        .otherwise({redirectTo: "/"});
    lP.html5Mode(true);
}]);
app.filter("firstCharToLowerCase", function () {
    return function (input) {
        return input.charAt(0).toUpperCase() + input.substr(1);
    }
});
app.controller("inicioAdmin", ["$scope", "$http", function (s, http) {
    s.empresas = [];
    http.get(url+"/json/empresas.json").then(function (response) {
        s.empresas = response.data;
    }, function (response) {
        console.log("ERROR: ", response);
    })
}]);

app.controller("ODTs", ["$scope", "$http", "$location", function (s, h, l) {
    s.Cliente = l.path().split('/')[2];
    s.ODTs = [];
}]);

app.controller("crearODT", ["$scope", "$http", "$location", function (s, http, l) {
    s.Cliente = l.path().split('/')[2];
    s.Fecha = moment().format('YYYY-MM-DD');
    s.Areas = {
        selected: null,
        "options": [
            "Web",
            "Diseño",
            "Contenido",
            "Multimedia",
            "Estrategia",
            "Cotizaciónes"
        ]
    };
}]);
