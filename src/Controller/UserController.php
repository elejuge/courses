class UserController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $name = "Edouard";

        return $this->render('user/user.html.twig', [
            'name' => $name,
        ]);
    }
}