import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.Scanner;

class Node {
    String data;
    Node yesNode;
    Node noNode;

    public Node(String data) {
        this.data = data;
        this.yesNode = null;
        this.noNode = null;
    }
}

public class BinaryTree {
    private Node rootNode;

    public BinaryTree() {
        // Initialize the binary tree structure here
        // (same structure as in your previous code)
    }

    public Node searchNode(String data, Node node) {
        if (node == null || node.data.equals(data)) {
            return node;
        }

        Node leftResult = searchNode(data, node.yesNode);
        if (leftResult != null) {
            return leftResult;
        }

        Node rightResult = searchNode(data, node.noNode);
        return rightResult;
    }

    public void readDataFromFile(String filename) throws IOException {
        BufferedReader br = new BufferedReader(new FileReader(filename));
        String line;
        // Read data line by line and construct the tree
        // (You need to implement the logic to construct the tree from the file)
        br.close();
    }

    public void playGame() {
        Node currentNode = rootNode;
        Scanner scanner = new Scanner(System.in);
        String response;

        while (currentNode.yesNode != null) {
            do {
                System.out.print(currentNode.data + " (yes/no): ");
                response = scanner.nextLine().toLowerCase().trim();
            } while (!response.equals("yes") && !response.equals("no"));

            if (response.equals("yes")) {
                currentNode = currentNode.yesNode;
            } else {
                currentNode = currentNode.noNode;
            }
        }

        System.out.println("My guess is: " + currentNode.data);
        scanner.close();
    }

    public static void main(String[] args) {
        BinaryTree tree = new BinaryTree();
        try {
            tree.readDataFromFile("data.txt"); // Specify your data file here
            System.out.println("Welcome to the Guessing Game!");
            tree.playGame();
        } catch (IOException e) {
            System.out.println("Error reading data from the file.");
            e.printStackTrace();
        }
    }
}