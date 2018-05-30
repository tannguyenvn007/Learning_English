import { Component, OnInit } from '@angular/core';
import { VocabularyService } from '../../services/vocabulary.service';
import { MessageService } from '../../services/message.service';
import {ActivatedRoute, Params, Router } from '@angular/router';
// import { Router } from '@angular/router/src/router';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent implements OnInit {

  constructor(private _vocabularyService: VocabularyService,
              private route: Router,
              private messageService: MessageService
  ) { }
  private vocabulariesTopic1 = [];
  private vocabulariesTopic2 = [];
  private vocabulariesTopic3 = [];


  ngOnInit() {
//   	$('.flexslider').flexslider({
// 	animation: "fade",
// 	slideshowSpeed: 4000,
// 	animationSpeed: 600,
// 	controlNav: false,
// 	directionNav: true,
// 	controlsContainer: ".flex-container" // the container that holds the flexslider
// });
    this.getAllVocabularyTopic1();
    this.getAllVocabularyTopic2();
    this.getAllVocabularyTopic3();

  }
getAllVocabularyTopic1(){
  this._vocabularyService
    .showAllVocabularyTopic1()
    .subscribe(vocabulariesTopic1 => {
      this.vocabulariesTopic1 = vocabulariesTopic1;
    })
}
getAllVocabularyTopic2(){
  this._vocabularyService
    .showAllVocabularyTopic2()
    .subscribe(vocabulariesTopic2 => {
      this.vocabulariesTopic2 = vocabulariesTopic2;
    })
}
getAllVocabularyTopic3(){
  this._vocabularyService
    .showAllVocabularyTopic3()
    .subscribe(vocabulariesTopic3 => {
      this.vocabulariesTopic3 = vocabulariesTopic3;
    })
}
}
