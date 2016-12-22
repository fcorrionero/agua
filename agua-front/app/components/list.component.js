"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require("@angular/core");
var http_1 = require("@angular/http");
var Observable_1 = require("rxjs/Observable");
var ListComponent = (function () {
    function ListComponent(_http) {
        this._http = _http;
        this.name = 'List';
        this.url = "http://127.0.0.1:8000/";
        this.json = new Observable_1.Observable();
        this.json = this.getList();
    }
    ListComponent.prototype.getList = function () {
        return this._http.get(this.url);
    };
    ListComponent.prototype.extractData = function (res) {
        var body = res.json();
        return body.data || {};
    };
    return ListComponent;
}());
ListComponent = __decorate([
    core_1.Component({
        moduleId: module.id,
        selector: 'list',
        templateUrl: '../templates/list.html',
    }),
    __metadata("design:paramtypes", [http_1.Http])
], ListComponent);
exports.ListComponent = ListComponent;
//# sourceMappingURL=list.component.js.map