import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';


import { HttpModule } from '@angular/http';
import { Routes, RouterModule } from '@angular/router';
@Injectable({
  providedIn: 'root'
})
export class VocabularyService {
  server = 'http://localhost:8000/api';
  headers: Headers = new Headers;
  constructor(private _http:Http) {
    this.headers.append('enctype', 'multipart/form-data');
    this.headers.append('Content-Type', 'application/json');
    this.headers.append('X-Requested-With', 'XMLHttpRequest');
   }
  showAllVocabularyTopic1(){
    return this._http.get(this.server+"/list1")
      .map(res => res.json());
  }
  showAllVocabularyTopic2(){
    return this._http.get(this.server+"/list2")
      .map(res => res.json());
  }
  showAllVocabularyTopic3(){
    return this._http.get(this.server+"/list3")
      .map(res => res.json());
  }
}
