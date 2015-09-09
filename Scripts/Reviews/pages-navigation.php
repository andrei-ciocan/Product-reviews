<div class="pagination" ng-show="vm.reviews.length">
	<ul>
		<li>
			<button type="button" ng-disabled="vm.currentPage == 1"
			ng-click="vm.currentPage=vm.currentPage-1">PREV</button>
		</li>
		<li>
			<span>Page {{vm.currentPage }} of {{ vm.numberOfPages() }}</span>
		</li>
		<li>
			<button type="button"
			ng-disabled="vm.currentPage >=  vm.numberOfPages() "
			ng-click="vm.currentPage = vm.currentPage+1">NEXT </button>
		</li>
	</ul>
</div>