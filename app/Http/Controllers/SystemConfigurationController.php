<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemConfiguration;
use Gate;
use RealRashid\SweetAlert\Facades\Alert;

class SystemConfigurationController extends Controller
{

    public function activation_view()
    {

            return view('admin.system_configurations.activation');

    }

    public function freelancer_payment_config()
    {

            return view('admin.system_configurations.freelancer_payment_config');


    }

    public function env_key_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
                $this->overWriteEnvFile($type, $request[$type]);
        }

        flash("System Configuration has been updated successfully",'success');
        return back();
    }

    public function updateActivation(Request $request)
    {

        dd($request->all());
        $env_changes = ['FORCE_HTTPS'];
        if (in_array($request->type, $env_changes)) {
            return $this->updateHttpsSettingsInEnv($request);
        }

        $system_config = SystemConfiguration::where('type', $request->type)->first();
        if($system_config!=null){
            $system_config->value = $request->value;
            if ($system_config->save()) {
                return 1;
            }
            else {
                return 0;
            }
        }
        else{
            $system_config = new SystemConfiguration;
            $system_config->type = $request->type;
            $system_config->value = $request->value;
            if ($system_config->save()) {
                return 1;
            }
            else {
                return 0;
            }
        }
    }

    public function overWriteEnvFile($type, $val)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"'.trim($val).'"';
            if(is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0){
                file_put_contents($path, str_replace(
                    $type.'="'.env($type).'"', $type.'='.$val, file_get_contents($path)
                ));
            }
            else{
                file_put_contents($path, file_get_contents($path)."\r\n".$type.'='.$val);
            }
        }
    }

    public function update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $system_configuration = SystemConfiguration::where('type', $type)->first();
            if($system_configuration != null){
                if(gettype($request[$type]) == 'array'){
                    $system_configuration->value = json_encode($request[$type]);
                }
                else {
                    $system_configuration->value = $request[$type];
                }
                $system_configuration->save();
            }
            else{
                $system_configuration = new SystemConfiguration;
                $system_configuration->type = $type;
                if(gettype($request[$type]) == 'array'){
                    $system_configuration->value = json_encode($request[$type]);
                }
                else {
                    $system_configuration->value = $request[$type];
                }
                $system_configuration->save();
            }
        }
            Alert::success('Success',"System Configuration has been updated successfully");
        return back();
    }

    public function updateHttpsSettingsInEnv($request)
    {
        if ($request->type == 'FORCE_HTTPS' && $request->value == 1) {
            $this->overWriteEnvFile($request->type, 'On');

            if(strpos(env('APP_URL'), 'http:') !== FALSE) {
                $this->overWriteEnvFile('APP_URL', str_replace("http:", "https:", env('APP_URL')));
            }

        }
        elseif ($request->type == 'FORCE_HTTPS' && $request->value == 0) {
            $this->overWriteEnvFile($request->type, 'Off');
            if(strpos(env('APP_URL'), 'https:') !== FALSE) {
                $this->overWriteEnvFile('APP_URL', str_replace("https:", "http:", env('APP_URL')));
            }

        }

        return 1;
    }

    public function home_settings(Request $request){
        return view('admin.default.website.home');
    }

    public function slider_setion(Request $request){
        dd($request->all());
    }


    //return policy page
    public function policy_index($type)
    {
            $policy = SystemConfiguration::where('type', $type)->first();
            return view('admin.policies.index', compact('policy'));

    }

    //policy info update
    public function policy_update(Request $request)
    {

            $system_policy = SystemConfiguration::where('type', $request->type)->first();
            $system_policy->value = $request->value;
            $system_policy->save();
            Alert::sucess('success',"System Policy has been updated successfully");
            return back();


    }
}
