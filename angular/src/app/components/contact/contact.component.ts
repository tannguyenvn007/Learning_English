import { Component, OnInit } from '@angular/core';

import {Contact} from '../../contact';

import { VocabularyService } from '../../services/vocabulary.service';
import { MessageService } from '../../services/message.service';
import {ActivatedRoute, Params, Router } from '@angular/router';

declare var $:any;

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

  constructor(
  			  private _vocabularyService: VocabularyService,
              private route: Router,
              private messageService: MessageService) { }

  ngOnInit() {
  }
  model = new Contact ();
  addContact(){
  	this.VocabularyService
  	.addContact(this.model)
  	.subscribe(response=>{
  		console.log(response);
  	})
  }


}
