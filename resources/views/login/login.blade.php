@extends("tienda.tienda")

@section("content")
<div class="sub-page-padding clearfix">				
    <div class="login-register-tabs" id="login-register-tabs">
        <ul class="resp-tabs-list clearfix">
            <li><a href="#.">Inciar</a></li>
            <li><a href="#.">Registrar</a></li>
        </ul>
        <div class="resp-tabs-container">
            <div>
                <div class="login-register-form">
                    <form name="login_form" id="login_form" action="login/login" method="POST">
                        {{ csrf_field() }}
                        <label>Correo Electronico *</label>
                        <input type="text" id="name" name="mail" class="validate[required]" data-prompt-position="topLeft:0">
                        <label>Contraseña *</label>
                        <input type="password" id="password" name="pass" class="validate[required]" data-prompt-position="topLeft:0">
                        <input type="submit" class="btn btn default btn-fill" value="Ingresar">
                        <div class="clearfix"></div>
                    </form>
                                                            
                </div>
            </div>
            
            <div>
                <div class="login-register-form">
                    <form name="" id="register_form" action="login/registrar" method="POST">
                        {{ csrf_field() }}
                        <label>Nombre *</label>
                        <input type="text" id="register_form_name" name="name" class="validate[required]" data-prompt-position="topLeft:0">
                        
                        <label>Apellido *</label>
                        <input type="text" id="register_form_name" name="last" class="validate[required]" data-prompt-position="topLeft:0">
                        
                        <label>Domicilio *</label>
                        <input type="text" id="register_form_email" name="dom" class="validate[required,custom[email]]" data-prompt-position="topLeft:0">
                        
                        <label>Correo Electronico *</label>
                        <input type="email" id="register_form_email" name="mail" class="validate[required,custom[email]]" data-prompt-position="topLeft:0">
                        
                        <label>Contraseña *</label>
                        <input type="password" id="register_form_password" name="pass" class="validate[required]" data-prompt-position="topLeft:0">
                        
                        <input type="submit" class="btn btn default btn-fill" value="Registrar">
                        <div class="clearfix"></div>
                    </form>

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection