<!-- <?php

// namespace App\Http\Livewire;

// use Livewire\Component;
// use App\Http\Livewire\Search;

// class BreweryMap extends Component
// {
//     protected $searchText;
//     public function render()
//     {
//         return view('livewire.brewery-map');
//     }
    
//     function __construct($searchText) {
//         $this->searchText = $searchText;
//     }
//     public function generateMap($breweries, $searchText) {
//         $html = '<map id="map"></map>
//             <script>
//                 var map = L.map("map").setView([40.416775, -3.703790], 13);
//                 L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
//                 attribution: "Map data &copy; <a href=&quot;https://www.openstreetmap.org/&quot;>OpenStreetMap</a> contributors, <a href=&quot;https://creativecommons.org/licenses/by-sa/2.0/&quot;>CC-BY-SA</a>, Imagery © <a href=&quot;https://www.mapbox.com/&quot;>Mapbox</a>",
//                 maxZoom: 18,
//                 id: "mapbox/streets-v11",
//                 tileSize: 512,
//                 zoomOffset: -1
//                 }).addTo(map);';
//         foreach ($breweries as $brewery) {
//         $html .= 'L.marker([' . $brewery->latitude . ',' . $brewery->longitude . ']).addTo(map)
//                 .bindPopup("<b>' . $brewery->name . '</b>")';
//         }
//         $html .= '</script>';
//         return $html;
//     }
    // echo $map->generateMap($breweries);
// }





// ?>