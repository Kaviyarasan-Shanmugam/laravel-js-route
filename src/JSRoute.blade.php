@php
    //Get the all route and convert as key is route name and value is url
    $routeCollection = \Route::getRoutes();
    foreach ($routeCollection as $key => $value) {
        $result[str_replace(".","",@$value->getName() ? $value->getName() : $value->uri)] = $value->uri;
    }
@endphp

<div id="package_result_id" style="display: none;">{{ json_encode($result) }}</div>

<script>
    /** 
     * [Description] This is function is helps to get url from laravel route
     * [Params 1] Key_value is route name 
     * [Params 2] params is parameter for route it is optional  
    */
    function route(key_value = false, params = {})
    {
        try {
            var key = key_value.replaceAll(".", "")
            var result = JSON.parse(document.getElementById('package_result_id').innerText)
            var base_url = window.location.origin;
            if (result[key]) {
                var url;
                if (params) {
                    let result_array = []
                    let reg_expression = /[{}]+/;
                    let reg_expression_optional = /[?]+/;
                    result[key].split('/').forEach(element => {
                        if (reg_expression.test(element)) {
                            element = element.replace('{', "")
                            element = element.replace('}', "")
                            if (reg_expression_optional.test(element)) {
                                params[element.replace('?', "")] ? result_array.push(params[element.replace('?', "")]) : ''
                            } else {
                                result_array.push(params[element])
                            }
                        } else {
                            result_array.push(element)
                        }
                    });
                    url = result_array.join('/')
                }
                return url ? `${base_url}/${url}` : `${base_url}/${result[key]}`;
            } else {
                console.log(`Please check the route name : ${key_value}`);
                return false
            }
        } catch (err) {
            console.log('something went wrong..!');
        }
    }
</script>
