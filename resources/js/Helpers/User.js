import Token from './Token'
import AppStorage from "./AppStorage";

class User{
    login(data){

        axios.post('/api/auth/login', data)
            .then(res =>
                this.responseAfterLogin(res))

            .catch(error => console.log(error.response.data))

    }
    responseAfterLogin(res){
        const access_token=res.data.access_token
        const user=res.data.user

        if(Token.isValid(access_token)){
            AppStorage.store(user,access_token)
            window.location='/forum'
        }

    }

    hasToken(){
        const token=AppStorage.getToken();
        if(token){
           return Token.isValid(token) ? true : false;
        }
        return false

    }

    loggedIn(){
       return this.hasToken();
    }

    logout(){
        AppStorage.clear();
        window.location='/forum'
    }
    name(){
        if(this.loggedIn()){
            return AppStorage.getUser();
        }
    }
    id(){
        if(this.loggedIn()){
            const payload = Token.payload(AppStorage.getToken())
            return payload.sub
        }
    }
}

export default User =new User();

