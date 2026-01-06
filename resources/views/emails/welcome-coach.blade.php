<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to the Team! 🚀</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700" rel="stylesheet" media="screen">
  <style>
    .hover-underline:hover { text-decoration: underline !important; }
    @media (max-width: 600px) {
      .sm-w-full { width: 100% !important; }
      .sm-px-24 { padding-left: 24px !important; padding-right: 24px !important; }
      .sm-py-32 { padding-top: 32px !important; padding-bottom: 32px !important; }
    }
  </style>
</head>
<body style="margin: 0; width: 100%; padding: 0; word-break: break-word; -webkit-font-smoothing: antialiased; background-color: #f8f9fa;">
  <div role="article" aria-roledescription="email" lang="en" style="font-family: 'Montserrat', sans-serif;">
    <table style="width: 100%; background-color: #f8f9fa;" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td align="center">
          <table class="sm-w-full" style="width: 600px;" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
              <td style="padding: 45px; text-align: center;">
                <a href="{{ config('app.url') }}">
                  <img src="{{ asset('assets/images/favicons/logo.png') }}" width="150" alt="Logo" style="border: 0;">
                </a>
              </td>
            </tr>
            <tr>
              <td align="center" class="sm-px-24">
                <table style="width: 100%;" cellpadding="0" cellspacing="0" role="presentation">
                  <tr>
                    <td style="border-radius: 8px; background-color: #ffffff; padding: 48px; text-align: left; font-size: 16px; line-height: 24px; color: #505050; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                      
                      <p style="margin-bottom: 5px; font-size: 18px; font-weight: 500;">Hello,</p>
                      <h1 style="margin-top: 0; font-size: 26px; font-weight: 700; color: #7367f0;">{{ $coach_name }}! 👋</h1>
                      
                      <p style="font-size: 18px; color: #263238; font-weight: 600; margin-bottom: 20px;">
                        We’re so excited to have you on board! 🥳
                      </p>
                      
                      <p style="margin-bottom: 24px;">
                        Your journey as a professional coach with us starts now. We've reviewed your profile and everything looks amazing. We can't wait to see the impact you'll make.
                      </p>

                      <div style="background-color: #f3f2fe; border-radius: 6px; padding: 20px; margin-bottom: 24px; border: 1px dashed #7367f0;">
                        <p style="margin: 0; font-weight: 600; color: #7367f0; font-size: 14px; text-transform: uppercase;">Login Credentials:</p>
                        <p style="margin: 10px 0 5px 0;"><strong>Email:</strong> <span style="color: #505050;">{{ $email }}</span></p>
                        <p style="margin: 0;"><strong>Temporary Password:</strong> <span style="color: #505050; background: #fff; padding: 2px 6px; border-radius: 4px; border: 1px solid #dcdcdc;">{{ $password }}</span></p>
                      </div>

                      <p style="margin-bottom: 24px;">
                        Please click the button below to log in, change your password, and finish setting up your professional profile so clients can find you!
                      </p>

                      <table cellpadding="0" cellspacing="0" role="presentation">
                        <tr>
                          <td style="border-radius: 4px; background-color: #7367f0;">
                            <a href="{{ route('login') }}" style="display: block; padding: 16px 32px; font-size: 16px; font-weight: 600; color: #ffffff; text-decoration: none;">Complete Your Profile &rarr;</a>
                          </td>
                        </tr>
                      </table>


                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 32px; text-align: center; font-size: 12px; color: #b0b0b0;">
                      
                      <p style="margin: 0;">&copy; {{ date('Y') }} SepFit. Built with ❤️ for fitness lovers.</p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>