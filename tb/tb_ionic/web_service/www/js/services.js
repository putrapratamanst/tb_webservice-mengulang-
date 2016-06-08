angular.module('starter.services', [])

.factory('beritaService', function($http) {
    var baseUrl = 'http://localhost/tb_ci/index.php/api/';
    return {
       
        ambilSemua: function (){
            return $http.get(baseUrl+'ambil'); 
        },
        ambilSatu: function (id){
            return $http.get(baseUrl+'ambilSatu/?id='+id); 
        },
        simpan: function (portalBerita){
            return $http.post(baseUrl+'simpan',portalBerita,{
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8;'
                }
            });
        },
        ubah: function (portalBerita){
            return $http.post(baseUrl+'ubah',portalBerita,{
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8;'
                }
            });
        },
        hapus: function (id){
            return $http.get(baseUrl+'hapus/?id='+id);
        }
    };

});
