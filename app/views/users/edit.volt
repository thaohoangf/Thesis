{% extends "layouts/template.volt" %}
{% block title %}Sửa thông tin cá nhân{% endblock %}
{% block welcome %}Xin chào{% endblock %}
{% block wrapper %}
    <li>
        {{ link_to('','Trang chủ') }}
    </li>
    <li>
        {{ link_to('users/profile/1','Trang cá nhân') }}
    </li>
    <li>
        {{ link_to('users/logout','Đăng xuất') }}
    </li>
{% endblock %}

{% block content %}
    <h2 align="center">
        Thông tin cá nhân
    </h2>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-2" >
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <h3 class="panel-title">{{ infor.fullname }}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        {{ form('users/edit/'~infor.id, 'method: post') }}
                        <div class="col-md-2 col-lg-2 " align="center">
                            <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <th>Tên đăng nhâp:</th>
                                    <td>
                                        {{ infor.name }}
                                    </td>
                                    <th>Họ và tên</th>
                                    <td>
                                        {{ text_field('class':'form-control','fullname','value':infor.fullname) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ngày sinh:</th>
                                    <td>{{ date_field('class':'form-control','birthday','value':infor.birthday) }}</td>
                                    <th>Giới tính</th>
                                    <td>
                                        {{ select_static('class':'form-control','gender','value':infor.gender,['1':'Nữ', '2':'Nam']) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td>
                                        {{ select('province_code',provinces,'using' : ['id', 'name'],
                                                  'useEmpty':true,'emptyText':'Chọn tỉnh','emptyValue':'@','value':infor.province_code,'class':'form-control') }}
                                        {{ select('district_code',districts,'using' : ['id', 'name'],
                                                  'useEmpty':true,'emptyText':'Chọn quận/huyện','emptyValue':'@','value':infor.district_code,'class':'form-control') }}
                                        {{ select('ward_code',wards,'using' : ['id', 'name'],
                                                  'useEmpty':true,'emptyText':'Chọn phường/xã','emptyValue':'@','value':infor.ward_code,'class':'form-control') }}
                                    </td>
                                    <th>E-mail</th>
                                    <td>{{ text_field('class':'form-control','email','value':infor.email) }}</td>
                                </tr>

                                <tr>
                                <tr>
                                    <th>Số điện thoại</th>
                                    <td>{{ text_field('class':'form-control','phone','value': infor.phone) }}</td>
                                    <th>Ngành học</th>
                                    <td>{{ select('major_code',majors,'using' : ['id', 'name'],
                                                'useEmpty': true, 'emptyValue' : '@', 'emptyText': 'Chọn ngành học', 'value': infor.major_code, 'class': 'form-control') }}</td>
                                </tr>
                                <tr>
                                    <th>Số CMND</th>
                                    <td>{{ text_field('class':'form-control','identity_code','value':infor.identity_code) }}</td>
                                    <th>Dân tộc</th>
                                    <td>{{ select('ethnic_code',ethnics,'using' : ['id', 'name'],
                                                'useEmpty': true, 'emptyText': 'Chọn dân tộc', 'emptyValue': '@','value': infor.ethnic_code,'class': 'form-control') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                        {{ submit_button('class':'btn btn-sm btn-warning', "Cập nhật", 'name':'edit') }}
                    </span>
                </div>
            </div>
            {{ endForm() }}
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        if($('#province').val() == "@") {
            $("#district,#ward").prop('disabled', true);
        }else {
            if($('#district').val() == '@'){
                $('#ward').prop('disabled',true);
            }
        }

        $('#province').on('change',function(){
            if($('#province').val() == "@") {
                $("#district,#ward").prop('disabled', true);
            }else{
                $("#district").prop('disabled', false);
                $('#district').on('change', function () {
                    if($('#district').val() == '@'){
                        $('#ward').prop('disabled',true);
                    }else{
                        $('#ward').prop('disabled',false);
                    }
                });
            }
        });

        $('#district').on('change', function () {
            if($('#district').val() == '@'){
                $('#ward').prop('disabled',true);
            }else{
                $('#ward').prop('disabled',false);
            }
        });

    </script>
{% endblock %}