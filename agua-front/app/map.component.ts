import { Component, OnInit } from '@angular/core';

declare var google: any;

@Component({
  moduleId: module.id,
  selector: 'map',
  templateUrl: './templates/map.html',
})
export class MapComponent implements OnInit {
  name = 'Map';
  ngOnInit() {
    var map = new google.maps.Map(document.getElementById('map'));
    var georssLayer = new google.maps.KmlLayer({
      url: 'http://api.flickr.com/services/feeds/geo/?g=322338@N20&lang=en-us&format=feed-georss'
    });
    georssLayer.setMap(map);
  }
}
