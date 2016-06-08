angular.module('starter.controllers', [])

.controller('DashCtrl', function($scope) {})

.controller('TambahCtrl', function($scope,beritaService, $ionicPopup){

  $scope.showAlert = function(msg) {
    $ionicPopup.alert({
        title: msg.title,
        template: msg.message,
        okText: 'Ok',
        okType: 'button-positive'
    });
  };

  $scope.simpan = function(portalBerita){

    if(!portalBerita.judul){
      $scope.showAlert({
        title: "Information",
        message: "Judul Mohon Diisi"
      });
    }else if(!portalBerita.isi){
      $scope.showAlert({
        title: "Information",
        message: "Isi Mohon Diisi"
      });
    }else if(!portalBerita.penulis){
      $scope.showAlert({
        title: "Information",
        message: "Penulis Mohon Diisi"
      });
    }else{
      beritaService.simpan({
        data: portalBerita
      }).then(function(resp) {
        console.log(resp);

        $scope.showAlert({
          title: "Information",
          message: "Data Telah Disimpan"
        });
        // $state.go("tab.buku");
      },function(err) {
        console.error('Error', err);
      });
    }

  };

})

.controller('BeritaCtrl', function($scope, $ionicPopup, beritaService) {
  // With the new view caching in Ionic, Controllers are only called
  // when they are recreated or on app start, instead of every page change.
  // To listen for when this page is active (for example, to refresh data),
  // listen for the $ionicView.enter event:
  //
  //$scope.$on('$ionicView.enter', function(e) {
  //});

  $scope.showAlert = function(msg) {
    $ionicPopup.alert({
        title: msg.title,
        template: msg.message,
        okText: 'Ok',
        okType: 'button-positive'
    });
  };

  $scope.hapus = function(portal_berita) {
    beritaService.hapus(portal_berita.portal_id).then(function(resp) {
      console.log(resp);
      $scope.showAlert({
        title: "Information",
        message: "Data Telah Dihapus"
      });
      $scope.showData();
    }, function(err) {
      console.log('Error', err);
    });
  }

  $scope.showData = function() {
    beritaService.ambilSemua().success(function(dataChat) {
      $scope.chats = dataChat;
    });
  };

  $scope.showData();

  console.log($scope.chats);

})

.controller('BeritaDetailCtrl', function($scope,$stateParams,$ionicPopup,$ionicModal,$state, beritaService) {

  $scope.showDataId = function() {
  beritaService.ambilSatu($stateParams.Id).success(function(dataChat) {
    $scope.portalBerita = dataChat;
  });
  };

  $scope.showDataId();

  $ionicModal.fromTemplateUrl('edit.html', function(modal){
    $scope.taskModal = modal;
  },{
    scope : $scope,
    animation : 'slide-in-up'
  });

  $scope.showAlert = function(msg) {
    $ionicPopup.alert({
        title: msg.title,
        template: msg.message,
        okText: 'Ok',
        okType: 'button-positive'
    });
  };

  $scope.editModal = function(){
    $scope.taskModal.show();
  };

  $scope.batal = function(){
    $scope.taskModal.hide();
    $scope.showDataId();
  };

  $scope.ubah = function(portalBerita){

    if(!portalBerita.judul){
      $scope.showAlert({
        title: "Information",
        message: "Judul Mohon Diisi"
      });
    }else if(!portalBerita.isi){
      $scope.showAlert({
        title: "Information",
        message: "Isi Mohon Diisi"
      });
    }else if(!portalBerita.penulis){
      $scope.showAlert({
        title: "Information",
        message: "Penulis Mohon Diisi"
      });
    }else{
      beritaService.ubah({
        data: portalBerita
      }).then(function(resp) {
        console.log(resp);

        $scope.showAlert({
          title: "Information",
          message: "Data Sudah Diupdate"
        });

        $scope.taskModal.hide();
        // $state.go("tab.buku");
      },function(err) {
        console.error('Error', err);
      });
    }
  };
})

.controller('TentangCtrl', function($scope) {

});
