import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  	$('.flexslider').flexslider({
	animation: "fade",
	slideshowSpeed: 4000,
	animationSpeed: 600,
	controlNav: false,
	directionNav: true,
	controlsContainer: ".flex-container" // the container that holds the flexslider
});
  }


}
