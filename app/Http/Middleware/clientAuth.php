<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\Models\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class clientAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $type): Response
    {

        $client_id = session()->get('client_id');
        $flag = true;
        if($type=== 'admin'){            
            if(!is_null(Auth::id())){
                $flag = false;
            }
        }
        if (($type === 'client') &&  !is_null(session()->get('client_id'))) {
            $client_res = Client::where('client_id', $client_id)->first();
            if ($client_res) {
                $flag = false;
                Client::where('client_id', $client_id)->update(['left_at' => $request->url()]);
            }
        }

        if ($flag && $type === 'client') {
            dd('redirect...');
            return redirect()->route('client.login', ['locale' => app()->getLocale()]);
        }
        if($flag && $type === 'admin'){
            return redirect()->route('admin.login', ['locale' => app()->getLocale()]);
        }
        
        return $next($request);
    }

//     public function handle($request, Closure $next)
// {
//     dd(auth()->user);
//     // if (auth()->check() && auth()->user()->role == 'client') {
//     //     return $next($request);
//     // }
//     // return redirect()->route('login');
//     return redirect()->route('client.login', ['locale' => app()->getLocale()]);

// }

}
