import java.io.*;
import java.util.Scanner;

class Node {
    String data;
    Node left;
    Node right;

    public Node(String data) {
        this.data = data;
        this.left = null;
        this.right = null;
    }
}

public class New_modifiedone {
    private Node root;
    private BufferedWriter writer;
    private BufferedReader reader;
    private Scanner scanner;

    public New_modifiedone() {
        root = null;

        // Initialize scanner for user input
        scanner = new Scanner(System.in);

        // Initialize the BufferedWriter for writing to the file
        try {
            writer = new BufferedWriter(new FileWriter("aravind.txt"));
            // Provide the path from where you want to load the tree structure file
            reader = new BufferedReader(new FileReader("aravind.txt"));
        } catch (IOException e) {
            e.printStackTrace();
        }
    }



    public void play() {
        Node currentNode = root;

        while (currentNode.left != null || currentNode.right != null) {
            System.out.println("Address: " + currentNode.hashCode());
            System.out.println(currentNode.data);
            writeToFile("Address: " + currentNode.hashCode());
            writeToFile(currentNode.data);

            String answer = getUserInput().toLowerCase();

            if (answer.equals("yes")) {
                if (currentNode.left == null) {
                    currentNode.left = createNewNode();
                }
                currentNode = currentNode.left;
            } else if (answer.equals("no")) {
                if (currentNode.right == null) {
                    currentNode.right = createNewNode();
                }
                currentNode = currentNode.right;
            } else {
                System.out.println("Invalid input. Please answer with 'Yes' or 'No'.");
                closeFile();
                return;
            }
        }

        System.out.println("Address: " + currentNode.hashCode());
        System.out.println("Is the movie " + currentNode.data + "?");
        writeToFile("Address: " + currentNode.hashCode());
        writeToFile("Is the movie " + currentNode.data + "?");

        String finalAnswer = getUserInput().toLowerCase();

        if (finalAnswer.equals("yes")) {
            System.out.println("Yay! I guessed the movie!");
        } else {
            System.out.println("Oh no! I need to improve my knowledge.");
        }

        closeFile();
    }

    private Node createNewNode() {
        System.out.println("Enter a question: ");
        String question = getUserInput();

        Node newNode = new Node(question);

        System.out.println("Enter the movie for 'Yes' response: ");
        newNode.left = new Node(getUserInput());

        System.out.println("Enter the movie for 'No' response: ");
        newNode.right = new Node(getUserInput());

        return newNode;
    }




 // Inside the GuessingGame class
    public void saveGame(Node node) {
        try {
            saveTree(node);
            writer.close();
            System.out.println("Game saved successfully.");
        } catch (IOException e) {
            System.out.println("Error saving the game: " + e.getMessage());
        }
    }

    private void saveTree(Node node) throws IOException {
        if (node == null) {
            writer.write("null");
            writer.newLine();
        } else {
            writer.write(node.data);
            writer.newLine();
            saveTree(node.left);
            saveTree(node.right);
        }
    }

    public void loadGame(String filename) {
        try {
            // Provide the path where you want to load the tree structure file
            reader = new BufferedReader(new FileReader(filename));
            root = buildTreeFromPreorder(reader);
            System.out.println("Game loaded successfully.");
        } catch (IOException e) {
            System.out.println("Error loading the game: " + e.getMessage());
        }
    }

    private Node buildTreeFromPreorder(BufferedReader reader) throws IOException {
        String data = reader.readLine();
        if (data.equals("null")) {
            return null;
        }

        Node node = new Node(data);
        node.left = buildTreeFromPreorder(reader);
        node.right = buildTreeFromPreorder(reader);

        return node;
    }

    public void displayTree() {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Select a tree traversal method:");
        System.out.println("1. Inorder");
        System.out.println("2. Preorder");
        System.out.println("3. Postorder");
        System.out.println("4. Return to main menu");

        int choice = Integer.parseInt(getUserInput());
        switch (choice) {
            case 1:
                System.out.println("Inorder Traversal:");
                displayInorder(root);
                break;
            case 2:
                System.out.println("Preorder Traversal:");
                displayPreorder(root);
                break;
            case 3:
                System.out.println("Postorder Traversal:");
                displayPostorder(root);
                break;
            case 4:
                // Return to the main menu
                break;
            default:
                System.out.println("Invalid choice.");
                break;
        }
    }

    private void displayInorder(Node node) {
        if (node != null) {
            displayInorder(node.left);
            System.out.println(node.data);
            displayInorder(node.right);
        }
    }

    private void displayPreorder(Node node) {
        if (node != null) {
            System.out.println(node.data);
            displayPreorder(node.left);
            displayPreorder(node.right);
        }
    }

    private void displayPostorder(Node node) {
        if (node != null) {
            displayPostorder(node.left);
            displayPostorder(node.right);
            System.out.println(node.data);
        }
    }

  

    public void displayHelp() {
        System.out.println("1. Play the game");
        System.out.println("2. Load another game file");
        System.out.println("3. Display the binary tree");
        System.out.println("4. Help information");
        System.out.println("5. Exit the program");
    }

    public void run() {
        char choice;
        do {
            System.out.println("Enter your choice \nP: Play the game\nL: Load another game file\nD: Display the binary tree\nH: Help information\nX: Exit the program ");
            choice = getUserInput().toUpperCase().charAt(0);
            switch (choice) {
                case 'P':
                    play();
                    break;
                case 'L':
                    System.out.println("Enter the file name to load: ");
                    String filename = getUserInput();
                    loadGame(filename);
                    break;
                case 'D':
                    System.out.println("Binary Tree Structure:");
                    displayTree();
                    break;
                case 'H':
                    displayHelp();
                    break;
                case 'X':
                    System.out.println("Exiting the program. Goodbye!");
                    break;
                default:
                    System.out.println("Invalid choice. Please try again.");
            }
        } while (choice != 'X');
    }
    private String getUserInput() {
        return scanner.nextLine();
    }

    private void writeToFile(String content) {
        try {
            writer.write(content);
            writer.newLine();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    private void closeFile() {
        try {
            writer.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public static void main(String[] args) {
        guessinggame3 game = new guessinggame3();
        System.out.println("Welcome to the Movie Guessing Game!");
        game.run();
    }
}