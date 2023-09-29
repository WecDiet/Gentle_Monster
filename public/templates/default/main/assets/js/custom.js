function changeStatus(url){
	$.get(url, function(data){
		var element		= 'a#status-' + data['id'];
		var classRemove = 'publish';
		var classAdd 	= 'unpublish';
		if(data['status']==1){
			classRemove = 'unpublish';
			classAdd 	= 'publish';
		}
		$(element).attr('href', "javascript:changeStatus('"+data['link']+"')");
		$(element + ' span').removeClass(classRemove).addClass(classAdd);
		
	}, 'json');
}

function changeSpecial(url){
	$.get(url, function(data){
		
		var element		= 'a#special-' + data['id'];
		var classRemove = 'publish';
		var classAdd 	= 'unpublish';
		if(data['special']==1){
			classRemove = 'unpublish';
			classAdd 	= 'publish';
		}
		$(element).attr('href', "javascript:changeSpecial('"+data['link']+"')");
		$(element + ' span').removeClass(classRemove).addClass(classAdd);
	}, 'json');
}

function changePopular(url){
	$.get(url, function(data){
		var element		= 'a#popular-' + data['id'];
		var classRemove = 'publish';
		var classAdd 	= 'unpublish';
		if(data['popular']==1){
			classRemove = 'unpublish';
			classAdd 	= 'publish';
		}
		$(element).attr('href', "javascript:changePopular('"+data['link']+"')");
		$(element + ' span').removeClass(classRemove).addClass(classAdd);
		
	}, 'json');
}
function changeSaleoff(url){
	$.get(url, function(data){
		var element		= 'a#saleoff-' + data['id'];
		var classRemove = 'publish';
		var classAdd 	= 'unpublish';
		if(data['saleoff']==1){
			classRemove = 'unpublish';
			classAdd 	= 'publish';
		}
		$(element).attr('href', "javascript:changeSaleoff('"+data['link']+"')");
		$(element + ' span').removeClass(classRemove).addClass(classAdd);
		
	}, 'json');
}

function changeBestdeal(url){
	$.get(url, function(data){
		var element		= 'a#bestdeal-' + data['id'];
		var classRemove = 'publish';
		var classAdd 	= 'unpublish';
		if(data['bestdeal']==1){
			classRemove = 'unpublish';
			classAdd 	= 'publish';
		}
		$(element).attr('href', "javascript:changeBestdeal('"+data['link']+"')");
		$(element + ' span').removeClass(classRemove).addClass(classAdd);
		
	}, 'json');

	
}
function changeDelivery(url){
	$.get(url, function(data){
		var element		= 'a#delivery-' + data['id'];
		var classRemove = 'publish';
		var classAdd 	= 'unpublish';
		if(data['delivery']==1){
			classRemove = 'unpublish';
			classAdd 	= 'publish';
		}
		$(element).attr('href', "javascript:changeDelivery('"+data['link']+"')");
		$(element + ' span').removeClass(classRemove).addClass(classAdd);
		
	}, 'json');
}

function changeFinish(url){
	$.get(url, function(data){
		var element		= 'a#finish-' + data['id'];
		var classRemove = 'publish';
		var classAdd 	= 'unpublish';
		if(data['finish']==1){
			classRemove = 'unpublish';
			classAdd 	= 'publish';
		}
		$(element).attr('href', "javascript:changeFinish('"+data['link']+"')");
		$(element + ' span').removeClass(classRemove).addClass(classAdd);
		
	}, 'json');
}

function submitForm(url){
	$('#adminForm').attr('action', url);
	$('#adminForm').submit();
}

function sortList(column, order){
	$('input[name=filter_column]').val(column);
	$('input[name=filter_column_dir]').val(order);
	$('#adminForm').submit();
}

function changePage(page){
	$('input[name=filter_page]').val(page);
	$('#adminForm').submit();
}

function changeGroupACP(url){
	
	$.get(url, function(data){
		var element		= 'a#group-acp-' + data['id'];
		var classRemove = 'publish';
		var classAdd 	= 'unpublish';
		if(data['group_acp']==1){
			classRemove = 'unpublish';
			classAdd 	= 'publish';
		}
		$(element).attr('href', "javascript:changeGroupACP('"+data['link']+"')");
		$(element + ' span').removeClass(classRemove).addClass(classAdd);
	}, 'json');
}


function makeId(length =5 ) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
      counter += 1;
    }
    return result;
}

$(document).ready(function(){
	$('input[name=checkall-toggle]').change(function(){
		var checkStatus = this.checked;
		$('#adminForm').find(':checkbox').each(function(){
			this.checked = checkStatus;
		});
	});
	
	$('#filter-bar button[name=submit-keyword]').click(function(){
		$('#adminForm').submit();
	});
	
	$('#filter-bar button[name=clear-keyword]').click(function(){
		$('#filter-bar input[name=filter_search]').val('');
		$('#adminForm').submit();
	});
	$('#filter-bar button[name=clear-keyword]').click(function(){
		$('#filter-bar input[name=filter_search]').val('');
		$('#searchForm').submit();
	});
	
	$('#filter-bar select[name=filter_state]').change(function(){
		$('#adminForm').submit();
	});
	
	$('#filter-bar select[name=filter_special]').change(function(){
		$('#adminForm').submit();
	});
	
	$('#filter-bar select[name=filter_group_acp]').change(function(){
		$('#adminForm').submit();
	});
	
	$('#filter-bar select[name=filter_group_id]').change(function(){
		$('#adminForm').submit();
	});
	
	$('#filter-bar select[name=filter_category_id]').change(function(){
		$('#adminForm').submit();
	});
	$('#filter-bar select[name=filter_product_id]').change(function(){
		$('#adminForm').submit();
	});
	$('#filter-bar select[name=filter_news_id]').change(function(){
		$('#adminForm').submit();
	});
	$('#btn-generate-order-number').click(function(e){
		e.preventDefault();
		$('#order_number').val(makeId(7));
	});
	
	$('.quantity-single-product').on('change', function () {
		let btnAddToCart = $('.btn-add-to-cart-single-product');
		let currentUrl = btnAddToCart.attr('href');
		if(currentUrl.includes('quantity')){
		 currentUrl = currentUrl.substring(0, currentUrl.lastIndexOf("=") + 1);
		 btnAddToCart.attr('href', currentUrl + $(this).val());
		}else{
		 btnAddToCart.attr('href', currentUrl + "&quantity="+ $(this).val());
		}
		
 });
})

document.querySelector(".third").addEventListener('click', function(){
	Swal.fire("Our First Alert", "With some body text and success icon!", "success");
  });










