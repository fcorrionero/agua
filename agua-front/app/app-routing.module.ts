import { NgModule }             from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { ListComponent } from './components/list.component';
import { MapComponent } from './components/map.component';

//import { DetailComponent } from './detail.component';
//import { SearchComponent } from './search.component';

const appRoutes: Routes = [
  { path: '', redirectTo: '/index', pathMatch: 'full' },
  { path: 'index', component: AppComponent },
  { path: 'list',  component: ListComponent }
  //{ path: 'map',component: MapComponent }
  //{ path: 'detail/:id', component: DetailComponent },
  //{ path: 'search',     component: SearchComponent }
];

@NgModule({
  imports: [ RouterModule.forRoot(appRoutes) ],
  exports: [ RouterModule ]
})
export class AppRoutingModule {}
