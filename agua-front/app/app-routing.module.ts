import { NgModule }             from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
//import { ListComponent } from './list.component';
//import { DetailComponent } from './detail.component';
//import { SearchComponent } from './search.component';
import { MapComponent } from './map.component';

const routes: Routes = [
  { path: '', redirectTo: '/index', pathMatch: 'full' },
  { path: 'index', component: AppComponent },
  //{ path: 'list',  component: ListComponent },
  //{ path: 'detail/:id', component: DetailComponent },
  //{ path: 'search',     component: SearchComponent }
  { path: 'map',     component: MapComponent }
];

@NgModule({
  imports: [ RouterModule.forRoot(routes) ],
  exports: [ RouterModule ]
})
export class AppRoutingModule {}
