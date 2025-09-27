<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    protected $userModel;
    protected $session;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }

    /**
     * Display registration form and process form submission
     */
    public function register()
    {
        // Check if form was submitted (POST request)
        if ($this->request->getMethod() === 'POST') {
            // Set validation rules for the form fields
            $validationRules = [
                'username' => [
                    'rules' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
                    'errors' => [
                        'required' => 'Username is required.',
                        'min_length' => 'Username must be at least 3 characters long.',
                        'max_length' => 'Username cannot exceed 50 characters.',
                        'is_unique' => 'This username is already taken.'
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email|is_unique[users.email]',
                    'errors' => [
                        'required' => 'Email is required.',
                        'valid_email' => 'Please enter a valid email address.',
                        'is_unique' => 'This email is already registered.'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[6]',
                    'errors' => [
                        'required' => 'Password is required.',
                        'min_length' => 'Password must be at least 6 characters long.'
                    ]
                ],
                'password_confirm' => [
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'required' => 'Please confirm your password.',
                        'matches' => 'Password confirmation does not match.'
                    ]
                ],
                'first_name' => [
                    'rules' => 'required|max_length[50]',
                    'errors' => [
                        'required' => 'First name is required.',
                        'max_length' => 'First name cannot exceed 50 characters.'
                    ]
                ],
                'last_name' => [
                    'rules' => 'required|max_length[50]',
                    'errors' => [
                        'required' => 'Last name is required.',
                        'max_length' => 'Last name cannot exceed 50 characters.'
                    ]
                ]
            ];

            // Validate the form data
            if ($this->validate($validationRules)) {
                // Hash the password using password_hash()
                $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

                // Prepare user data for saving
                $userData = [
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'password' => $hashedPassword,
                    'first_name' => $this->request->getPost('first_name'),
                    'last_name' => $this->request->getPost('last_name'),
                    'role' => 'student', // Default role
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];

                // Save user data to the users table
                if ($this->userModel->save($userData)) {
                    // Set success flash message and redirect to login page
                    $this->session->setFlashdata('success', 'Registration successful! Please login with your credentials.');
                    return redirect()->to(base_url('login'));
                } else {
                    // Set error flash message
                    $this->session->setFlashdata('error', 'Registration failed. Please try again.');
                }
            }
        }

        // Load the registration view (app/Views/auth/register.php)
        return view('auth/register');
    }

    /**
     * Display login form and process form submission
     */
    public function login()
    {
        // Check if user is already logged in
        if ($this->session->get('isLoggedIn')) {
            return redirect()->to(base_url('dashboard'));
        }

        // Check if form was submitted (POST request)
        if ($this->request->getMethod() === 'POST') {
            // Set validation rules for login form
            $validationRules = [
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email is required.',
                        'valid_email' => 'Please enter a valid email address.'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password is required.'
                    ]
                ]
            ];

            // Validate the form data
            if ($this->validate($validationRules)) {
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                // Check if database has a user for the provided email
                $user = $this->userModel->where('email', $email)->first();

                if ($user) {
                    // Verify the submitted password against the stored hash using password_verify()
                    if (password_verify($password, $user['password'])) {
                        // If credentials are correct, create a user session
                        $sessionData = [
                            'userID' => $user['id'],
                            'username' => $user['username'],
                            'email' => $user['email'],
                            'first_name' => $user['first_name'],
                            'last_name' => $user['last_name'],
                            'role' => $user['role'],
                            'isLoggedIn' => true
                        ];

                        $this->session->set($sessionData);

                        // Set welcome flash message and redirect to dashboard
                        $this->session->setFlashdata('success', 'Welcome back, ' . $user['first_name'] . '!');
                        return redirect()->to(base_url('dashboard'));
                    } else {
                        // Invalid password
                        $this->session->setFlashdata('error', 'Invalid email or password.');
                    }
                } else {
                    // User not found
                    $this->session->setFlashdata('error', 'Invalid email or password.');
                }
            }
        }

        // Load the login view (app/Views/auth/login.php)
        return view('auth/login');
    }

    /**
     * Destroy the current session and redirect to homepage or login page
     */
    public function logout()
    {
        // Destroy the current session using session()->destroy()
        $this->session->destroy();

        // Set logout message and redirect to login page
        $this->session->setFlashdata('success', 'You have been logged out successfully.');
        return redirect()->to(base_url('login'));
    }

    /**
     * Protected page that only logged-in users can see
     */
    public function dashboard()
    {
        // Check if a user is logged in at the start of the method
        if (!$this->session->get('isLoggedIn')) {
            // If not logged in, redirect to login page
            $this->session->setFlashdata('error', 'Please login to access the dashboard.');
            return redirect()->to(base_url('login'));
        }

        // Get user data from session
        $data = [
            'user' => [
                'id' => $this->session->get('userID'),
                'username' => $this->session->get('username'),
                'email' => $this->session->get('email'),
                'first_name' => $this->session->get('first_name'),
                'last_name' => $this->session->get('last_name'),
                'role' => $this->session->get('role')
            ]
        ];

        // Load the dashboard view
        return view('auth/dashboard', $data);
    }
}
