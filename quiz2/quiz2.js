angular.module('quiz2App', [])
	.controller('FlickrController', ['FlickrService', '$scope', function(FlickrService, $scope) {
		var flickr = this;
		
		flickr.urlFormat = "https://farm{farm-id}.staticflickr.com/{server-id}/{id}_{secret}.jpg"; //https://www.flickr.com/services/api/misc.urls.html
		
		flickr.photos = [];
		
		$scope.load = function () {
			FlickrService.readAll($scope.pagination.pageSize, $scope.pagination.pageNumber).then(function (response) {
				//console.log(response.data);
				flickr.photos = [];
				for(var i in response.data.photos.photo){
					var photo = response.data.photos.photo[i];
					var url = flickr.urlFormat.replace('{farm-id}', photo.farm).replace('{server-id}', photo.server).replace('{id}', photo.id).replace('{secret}', photo.secret);
					flickr.photos.push(url);
					$scope.pagination.totalItems = response.data.photos.total;
				}
				//console.log(flickr.photos);
			});
		};
		
		$scope.pagination = {
			pageSize: 10,
			pageNumber: 1,
			totalItems: null,
			getTotalPages: function () {
				return Math.ceil(this.totalItems / this.pageSize);
			},
			nextPage: function () {
				if (this.pageNumber < this.getTotalPages()) {
					this.pageNumber++;
					$scope.load();
				}
			},
			previousPage: function () {
				if (this.pageNumber > 1) {
					this.pageNumber--;
					$scope.load();
				}
			}
		};


		$scope.load();
		
	}]);
	
(function () {

    angular.module('quiz2App')
        .service('FlickrService', ['$http', FlickrService]);

    function FlickrService($http) {

        var self = this;
		var apiKey = "3aaf5d4bef785f1951b33bdcfee71c41";
        
		//https://www.flickr.com/services/api/flickr.photos.search.html
		var baseUrl = "https://api.flickr.com/services/rest/?method=flickr.photos.search&tags=soccer&api_key="+apiKey+"&format=json&nojsoncallback=1"; //added nojsoncall back since we dont need it since they have cors setup
        
        self.readAll = function (pageSize, pageNumber) {
            return $http({
                method: 'GET',
                url: baseUrl + "&per_page=" + pageSize + "&page=" + pageNumber
            }).then(function (response) {
                return response;
            });
        };
    }
}());

//Yes lets mix some bootstrap jquery modal stuff in here, until we have a better angular solution:
$(document).ready(function(){
	$('#modal').on('show.bs.modal', function (evt) {
		var $button = $(evt.relatedTarget);
		var url = $button.data('modal-url');
		
		$(".modal-body", this).html('<img class="fillImg" src="'+url+'" />');	
	});
});
