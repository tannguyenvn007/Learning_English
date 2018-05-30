import { Component, Injectable } from '@angular/core';
import { Index } from './index';
import { NgForm }   from '@angular/forms';
import { Http, Headers } from '@angular/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';
  // constructor(private _http: Http){}
  //       private headers = new Headers({'Content-Type': 'application/json'});
  // 	onSubmit(form: NgForm): Promise <Admin>{
  //       return this._http.post('http://127.0.0.1:8000/api/admin', JSON.stringify(form.value), {headers: this.headers})
  // 		   .toPromise()
  //   	           .then(res => res.json().data)
  //   	            .catch(this.handleError);
  // }
  // private handleError(error: any): Promise<any> {
  // console.error('An error occurred', error); 
  // return Promise.reject(error.message || error);
  // }
  constructor(private _http: Http){}
        private headers = new Headers({'Content-Type': 'application/json'});
  	onSubmit(form: NgForm): Promise <Index>{
        return this._http.get('http://127.0.0.1:8000/api/list',{headers: this.headers})
  		   .toPromise()
    	           .then(res => res.json().data)
    	            .catch(this.handleError);
  }
  private handleError(error: any): Promise<any> {
  console.error('An error occurred', error); 
  return Promise.reject(error.message || error);
  }
}
