## Show product admin - Site map : admin.php
	- Đầu tiên là connect đến mysql bằng connect
	- Sau đó query đến bảng [product]
	- Tiếp theo sử dụng hàm fetching có sẵn của php thực hiện fetching dử liệu với syntax và cách thực hiện
		+ Khi đã select đến table product thì sẽ có được product
			-> sử dụng product kèm theo method sẵn có như đã nói ở trên
				``` $rs = $result->fetch()```
				+ Lúc này data trả về là một array các sảng phẩm ta chỉ cần truy  xuất theo đúng key được declare fileds