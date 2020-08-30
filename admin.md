## Show product admin - Site map : admin.php
	- Đầu tiên là connect đến mysql bằng connect
	- Sau đó query đến bảng [product]
	- Tiếp theo sử dụng hàm fetching có sẵn của php thực hiện fetching dử liệu với syntax và cách thực hiện
		+ Khi đã select đến table product thì sẽ có được product
			-> sử dụng product kèm theo method sẵn có như đã nói ở trên
				``` $rs = $result->fetch()```
				+ Lúc này data trả về là một array các sảng phẩm ta chỉ cần truy  xuất theo đúng key được declare fileds











## Login - Site map: login.php
	- Với việc login thì đâu tiền cần xác định method và các field sử dụng
	- Ở đầy về mặc che dấu dữ liệu nên ta sẽ sử dụng method POST  để tương tác với CSDL




## CREATE - EDIT  - DELETE

* With CREATE
	- UI cần cung cấp 1 giao diện để admin nhập các trường dữ liệu 


	- Việc tạo sản phẩm hiện tại khi upload image ta sẽ CUT đường dẫn url của ảnh để ảnh hiện tải chỉ càn hiển thị theo dạng local ảnh đã có sẵn trong path tính của project ! .. note

* With EDIT: 
	- Khi handle việc onClick vào button edit đồng thời khi đó bắn 1 query parameter lên url với tham số query -> để khi sang site theo url 
	- eg: edit/php?id="" => truyền tham  số query lên cúng như qs trong [js]!

	- note: Cần cung cấp thêm 1 UI gồm ô input để thực hiện việc  thay thế mới !


* With DELETE
	- Chúng tả chỉ cấn khi click vào button thì query params mà khi truy cập vào đúng site đó thì việc đầu tiền sẽ là get query params về và query theo câu lệnh sql trúng với id trong table -> delete success !


