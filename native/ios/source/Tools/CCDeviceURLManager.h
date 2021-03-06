/*-----------------------------------------------------------
 * http://softwareispoetry.com
 *-----------------------------------------------------------
 * This software is distributed under the Apache 2.0 license.
 *-----------------------------------------------------------
 * File Name   : CCDeviceURLManager.h
 * Description : iOS specific url manager.
 *
 * Created     : 04/03/10
 * Author(s)   : Ashraf Samy Hegab
 *-----------------------------------------------------------
 */

@class CCDeviceURLManagerOC;

class CCDeviceURLManager : public virtual CCActiveAllocation
{
public:
    CCDeviceURLManager();
    ~CCDeviceURLManager();

    void clear();
    bool isReadyToRequest();

    void processRequest(CCURLRequest *inRequest);

protected:
    CCDeviceURLManagerOC *internal;
};


struct CCURLRequestPacket
{
    CCURLRequestPacket()
    {
        request = NULL;
        connection = NULL;
        data = NULL;
    }
    ~CCURLRequestPacket()
    {
        if( data != NULL )
        {
            [data release];
        }
    }
    CCURLRequest *request;
    NSURLConnection *connection;
	NSMutableData *data;
};

@interface CCDeviceURLManagerOC : NSObject
{
@private
    CCList<CCURLRequestPacket> currentRequests;
}

-(void)processRequest:(CCURLRequestPacket*)urlRequestPacket;

-(void)connection:(NSURLConnection*)connection didReceiveResponse:(NSURLResponse*)response;
-(void)connection:(NSURLConnection*)connection didReceiveData:(NSData*)data;
-(void)connection:(NSURLConnection*)connection didFailWithError:(NSError*)error;
-(void)connectionDidFinishLoading:(NSURLConnection*)connection;

-(void)clear;

@end


void SetLastRequestTime(NSUserDefaults *archive, NSString *string);
const float GetLastRequestTime(NSUserDefaults *archive, NSString *string);