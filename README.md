Coroner is a deadman switch application written in PHP on the Laravel framework, and will use Apprise (https://github.com/caronc/apprise) for third party notification services. The intent is to have a remote server which recieves periodic updates either manually or from a client application and then take custom actions if an update is not recieved for a certain period of time.