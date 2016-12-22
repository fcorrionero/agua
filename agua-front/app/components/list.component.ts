import { Component } from '@angular/core';
import {Http, Response, Headers,RequestOptions} from "@angular/http";
import { Observable } from 'rxjs/Observable';

@Component({
  moduleId: module.id,
  selector: 'list',
  templateUrl: '../templates/list.html',
})
export class ListComponent {
  name = 'List';
  public url = "http://127.0.0.1:8000/";
  public json = new Observable<Response>();

  constructor(private _http: Http){
    this.json = this.getList();
  }

  getList(){
    return this._http.get(this.url);
  }
  private extractData(res: Response) {
    let body = res.json();
    return body.data || { };
  }
}
