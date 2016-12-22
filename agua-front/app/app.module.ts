import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent }  from './app.component';
import { AppRoutingModule } from './app-routing.module';

import { ListComponent } from './components/list.component';

@NgModule({
  imports:      [ BrowserModule,AppRoutingModule ],
  declarations: [
    AppComponent,
    ListComponent
  ],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }
