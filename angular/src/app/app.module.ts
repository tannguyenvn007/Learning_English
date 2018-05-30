import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule }   from '@angular/forms';
import { HttpModule }    from '@angular/http';


import { AngularFontAwesomeModule } from 'angular-font-awesome';
//Thuc hien Import RouterModule, Routes

import { RouterModule, Routes } from '@angular/router';


import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { TestComponent } from './components/test/test.component';
import { ContactComponent } from './components/contact/contact.component';
import { LoginComponent } from './components/login/login.component';
import { RegisterComponent } from './components/register/register.component';
import { IndexComponent } from './components/index/index.component';
import { DetailComponent } from './components/detail/detail.component';
import { TestDetailComponent } from './components/test-detail/test-detail.component';


const appRoutes :Routes = [
  
  {
    path :'',
    component : IndexComponent
  },
  {
    path :'index',
    component : IndexComponent
  },
  {
    path :'contact',
    component : ContactComponent
  },
  {
    path :'test/:id',
    component : TestComponent
  },
  {
    path :'login',
    component : LoginComponent
  },
  {
    path :'register',
    component : RegisterComponent
  },
  {
    path :'detail/:id',
    component : DetailComponent
  }

];
@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    TestComponent,
    ContactComponent,
    LoginComponent,
    RegisterComponent,
    IndexComponent,
    DetailComponent,
    TestDetailComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(appRoutes),
    AngularFontAwesomeModule,
    FormsModule, 
    HttpModule

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
