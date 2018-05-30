import { Component, OnInit } from '@angular/core';

import { VocabularyService } from '../../services/vocabulary.service';
import { MessageService } from '../../services/message.service';
import {ActivatedRoute, Params, Router } from '@angular/router';
@Component({
  selector: 'app-detailvoca',
  templateUrl: './detailvoca.component.html',
  styleUrls: ['./detailvoca.component.css']
})
export class DetailvocaComponent implements OnInit {

  constructor(private _vocabularyService: VocabularyService,
              private router: Router,
              private route: 
              ActivatedRoute,
              private messageService: MessageService) { }
  private allTopic = [];
  private vocaBaseOnTopic = [];
  private oneTopic=[];
  ngOnInit() {
    this.getAllTopic();
    this.getVocaBaseOnTopic();
    this.getOneTopic();
    

  }
  getAllTopic(){
  this._vocabularyService
    .showAlltopic()
    .subscribe(allTopic => {
      this.allTopic = allTopic;
    })
  }
  getOneTopic(){
  	var id = this.route.snapshot.params['id'];
  	this._vocabularyService
    .showOnetopic(id)
    .subscribe(oneTopic => {
      this.oneTopic = oneTopic;
      this.oneTopic.id=id;
      console.log(this.oneTopic);

    })
  }
  getVocaBaseOnTopic(){
  	var id = this.route.snapshot.params['id'];
  	this._vocabularyService
    .showVocaBaseOntopic(id)
    .subscribe(vocaBaseOnTopic => {
      this.vocaBaseOnTopic = vocaBaseOnTopic;
      this.vocaBaseOnTopic.id=id;
      console.log(this.vocaBaseOnTopic);

    })
  }

}
