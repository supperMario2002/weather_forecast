function changKeyWordTokeywords(keywords) {
    //Lấy text từ thẻ input title
    keywords = keywords.toLowerCase();
    //Đổi ký tự có dấu thành không dấu
    keywords = keywords.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, "a");
    keywords = keywords.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, "e");
    keywords = keywords.replace(/i|í|ì|ỉ|ĩ|ị/gi, "i");
    keywords = keywords.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, "o");
    keywords = keywords.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, "u");
    keywords = keywords.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, "y");
    keywords = keywords.replace(/đ/gi, "d");
    //Xóa các ký tự đặt biệt
    keywords = keywords.replace(
        /\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
        ""
    );
    //Đổi khoảng trắng thành ký tự gạch ngang
    keywords = keywords.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    keywords = keywords.replace(/\-\-\-\-\-/gi, "-");
    keywords = keywords.replace(/\-\-\-\-/gi, "-");
    keywords = keywords.replace(/\-\-\-/gi, "-");
    keywords = keywords.replace(/\-\-/gi, "-");
    //Xóa các ký tự gạch ngang ở đầu và cuối
    keywords = "@" + keywords + "@";
    keywords = keywords.replace(/\@\-|\-\@|\@/gi, "");
    //In keywords ra textbox có id “keywords”
    return keywords;
}


