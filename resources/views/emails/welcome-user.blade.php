<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to SepFit! 🏠💪</title>
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
<body style="margin: 0; width: 100%; padding: 0; word-break: break-word; -webkit-font-smoothing: antialiased; background-color: #f4f7f9;">
  <div role="article" aria-roledescription="email" lang="en" style="font-family: 'Montserrat', sans-serif;">
    <table style="width: 100%; background-color: #f4f7f9;" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td align="center">
          <table class="sm-w-full" style="width: 600px;" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
              <td style="padding: 45px; text-align: center;">
                <a href="{{ config('app.url') }}">
                  <img src="{{ asset('assets/images/favicons/logo.png') }}" width="150" alt="SepFit" style="border: 0;">
                </a>
              </td>
            </tr>
            <tr>
              <td align="center" class="sm-px-24">
                <table style="width: 100%;" cellpadding="0" cellspacing="0" role="presentation">
                  <tr>
                    <td style="border-radius: 12px; background-color: #ffffff; padding: 48px; text-align: left; font-size: 16px; line-height: 24px; color: #505050; box-shadow: 0 8px 16px rgba(0,0,0,0.05);">
                      
                      <p style="margin-bottom: 5px; font-size: 18px; font-weight: 500;">Hello,</p>
                      <h1 style="margin-top: 0; font-size: 26px; font-weight: 700; color: #7367f0;">{{ $user_name }}! 👋</h1>
                      
                      <p style="font-size: 20px; color: #263238; font-weight: 600; margin-bottom: 20px;">
                        Welcome to the family! We're thrilled to have you here. 🥳
                      </p>
                      
                      <p style="margin-bottom: 24px;">
                        Congratulations! You've taken the first and most important step towards a healthier, stronger version of yourself. At <strong>SepFit</strong>, we are dedicated to providing you with the best tools and coaching to help you reach your goals.
                      </p>

                      <div style="background-color: #f8f7ff; border-radius: 8px; padding: 20px; margin-bottom: 24px; border: 1px solid #e9e7fd;">
                        <p style="margin: 0; font-weight: 600; color: #7367f0; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Account Overview:</p>
                        <p style="margin: 12px 0 5px 0;"><strong>Username / Email:</strong> <span style="color: #505050;">{{ $email }}</span></p>
                        <p style="margin: 0;"><strong>Password:</strong> <span style="color: #505050;">Your selected password</span></p>
                      </div>

                      <p style="margin-bottom: 24px;">
                        Ready to break some sweat? Your personalized dashboard is waiting for you. Log in now to explore your workout plans and connect with your coaches.
                      </p>

                      <table cellpadding="0" cellspacing="0" role="presentation" style="margin-bottom: 32px;">
                        <tr>
                          <td style="border-radius: 6px; background-color: #7367f0; box-shadow: 0 4px 11px rgba(115, 103, 240, 0.35);">
                            <a href="{{ route('login') }}" style="display: block; padding: 18px 36px; font-size: 16px; font-weight: 600; color: #ffffff; text-decoration: none;">Go to My Dashboard &rarr;</a>
                          </td>
                        </tr>
                      </table>

                      <hr style="border: 0; border-top: 1px solid #eeeeee; margin-bottom: 24px;">

                      <p style="font-size: 14px; color: #888888; margin-bottom: 0;">
                        If you have any questions, feel free to reply to this email or contact our support team. We're always here to help!
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 32px; text-align: center; font-size: 12px; color: #b0b0b0;">
                      <!-- <p style="margin-bottom: 8px;">
                        <a href="#" style="color: #7367f0; text-decoration: none; margin: 0 10px;">Privacy Policy</a> | 
                        <a href="#" style="color: #7367f0; text-decoration: none; margin: 0 10px;">Support</a>
                      </p> -->
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